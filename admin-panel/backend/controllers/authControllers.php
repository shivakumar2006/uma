<?php
ob_start();
require_once __DIR__ . "/../models/User.php";
require_once __DIR__ . "/../../config/app.php";
require_once __DIR__ . "/../utils/jwt.php";

class AuthController {

    private $user;
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->user = new User($conn);
    }

    // 🔹 REGISTER
    public function register() {

        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'] ?? null;
        $username = $_POST['username'] ?? null;

        // ⚠️ role (safe default)
        $role = $_POST['role'] ?? 'user';

        if (!$email || !$password || !$username) {
            die("All fields required");
        }

        if (strlen($password) < 6) {
            die("Password must be at least 6 characters");
        }

        // check user exists
        if ($this->user->findByEmail($email)) {
            die("User already exists");
        }

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // ✅ DB COLUMN = name (not username)
        $data = [
            "email" => $email,
            "password" => $hashedPassword,
            "name" => $username,
            "role" => $role
        ];

        $result = $this->user->register($data);

        if (!$result) {
            die("Registration failed");
        }

        // ✅ redirect after signup
        header("Location: " . BASE_URL . "login.php?success=1");
        exit();
    }

    // 🔹 LOGIN
    public function login() {

        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'] ?? null;

        if (!$email || !$password) {
            die("Email & password required");
        }

        $user = $this->user->findByEmail($email);

        if (!$user || !password_verify($password, $user['password'])) {
            die("Invalid credentials");
        }

        // ✅ start session
        session_start();

        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "email" => $user['email'],
            "role" => $user['role']
        ];

        // ✅ ROLE BASED REDIRECT
        if ($user['role'] === 'admin') {
            header("Location: " . BASE_URL . "admin-panel/index.php");
        } else {
            header("Location: " . BASE_URL . "index.php");
        }

        exit();
    }

    // 🔹 FORGOT PASSWORD
    public function forgotPassword() {

        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if (!$email) {
            die("Valid email required");
        }

        if (!$this->user->findByEmail($email)) {
            die("User not found");
        }

        // delete old tokens
        $stmt = $this->conn->prepare("DELETE FROM password_resets WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $token = bin2hex(random_bytes(32));
        $expires = date("Y-m-d H:i:s", strtotime("+1 hour"));

        $stmt = $this->conn->prepare(
            "INSERT INTO password_resets (email, token, expires_at) VALUES (?, ?, ?)"
        );

        $stmt->bind_param("sss", $email, $token, $expires);
        $stmt->execute();

        $resetLink = BASE_URL . "reset-password.php?token=" . $token;

        echo "Reset link: " . $resetLink;
        exit();
    }

    // 🔹 RESET PASSWORD
    public function resetPassword() {

        $token = $_POST['token'] ?? null;
        $password = $_POST['password'] ?? null;

        if (!$token || !$password) {
            die("Token & password required");
        }

        if (strlen($password) < 6) {
            die("Password must be at least 6 characters");
        }

        $stmt = $this->conn->prepare(
            "SELECT * FROM password_resets WHERE token=? AND expires_at > NOW()"
        );

        $stmt->bind_param("s", $token);
        $stmt->execute();

        $result = $stmt->get_result()->fetch_assoc();

        if (!$result) {
            die("Invalid or expired token");
        }

        $email = $result['email'];
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // update password
        $stmt = $this->conn->prepare(
            "UPDATE users SET password=? WHERE email=?"
        );

        $stmt->bind_param("ss", $hashedPassword, $email);
        $stmt->execute();

        // delete token
        $stmt = $this->conn->prepare(
            "DELETE FROM password_resets WHERE email=?"
        );

        $stmt->bind_param("s", $email);
        $stmt->execute();

        echo "Password updated successfully";
        exit();
    }

    // 🔹 LOGOUT
    public function logout() {
        session_start();
        session_destroy();

        header("Location: " . BASE_URL . "login.php");
        exit();
    }
}