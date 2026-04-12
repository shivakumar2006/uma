<?php

class User {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function register($data) {
        $password = password_hash($data['password'], PASSWORD_BCRYPT);

        $stmt = $this->conn->prepare(
            "INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)"
        );

        $stmt->bind_param("ssss",
            $data['name'],
            $data['email'],
            $password,
            $data['role']
        );

        return $stmt->execute();
    }

    public function findByEmail($email) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}