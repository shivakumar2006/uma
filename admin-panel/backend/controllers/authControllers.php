<?php

require_once __DIR__ . "/../models/User.php";
require_once __DIR__ . "/../../config/app.php";
require_once __DIR__ . "/../utils/jwt.php";

class AuthController {

    private $user;

    public function __construct($conn) {
        $this->user = new User($conn);
    }

    // register 
    public function register() {
        $data = $_POST;

        if (empty($data['email']) || empty($data['password'])) {
            die("Email & Password required");
        }

        $this->user->register($data);

        echo "User registered successfully";
    }

    // login
    public function login() {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->user->findByEmail($email);

        if (!$user || !password_verify($password, $user['password'])) {
            die("Invalid credentials");
        }

        $token = generateJWT($user);

        echo json_encode([
            "token" => $token
        ]);
    }

    // forgot password
    public function forgotPassword() {
        $email = $_POST['email'];

        $token = bin2hex(random_bytes(32));
        $expires = date("Y-m-d H:i:s", strtotime("+1 hour"));

        global $conn;

        $stmt = $conn->prepare(
            "INSERT INTO password_resets (email, token, expires_at) VALUES (?, ?, ?)"
        );

        $stmt->bind_param("sss", $email, $token, $expires);
        $stmt->execute();

        echo "Reset link: " . BASE_URL . "reset-password.php?token=" . $token;
    }

    // reset password
    public function resetPassword() {
        $token = $_POST['token'];
        $newPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);

        global $conn;

        $stmt = $conn->prepare(
            "SELECT * FROM password_resets WHERE token=? AND expires_at > NOW()"
        );

        $stmt->bind_param("s", $token);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();

        if (!$result) {
            die("Invalid or expired token");
        }

        $email = $result['email'];

        $stmt = $conn->prepare("UPDATE users SET password=? WHERE email=?");
        $stmt->bind_param("ss", $newPassword, $email);
        $stmt->execute();

        echo "Password updated successfully";
    }
}