<?php

class Query {
    private $conn;
    private $table = "queries";

    public function __construct($conn) {
        $this->conn = $conn;
    }

    // CREATE QUERY
    public function create($data) {

        $sql = "INSERT INTO {$this->table} 
                (name, email, phone, address, message) 
                VALUES (?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($this->conn, $sql);

        if (!$stmt) {
            die("Prepare failed: " . mysqli_error($this->conn));
        }

        mysqli_stmt_bind_param(
            $stmt,
            "sssss",
            $data['name'],
            $data['email'],
            $data['phone'],
            $data['address'],
            $data['message']
        );

        return mysqli_stmt_execute($stmt);
    }

    // GET ALL
    public function getAll($status = null) {

        if ($status) {
            $sql = "SELECT * FROM {$this->table} WHERE status = ? ORDER BY created_at DESC";

            $stmt = mysqli_prepare($this->conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $status);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);
        } else {
            $sql = "SELECT * FROM {$this->table} ORDER BY created_at DESC";
            $result = mysqli_query($this->conn, $sql);
        }

        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    // MARK RESOLVED
    public function markResolved($id) {

        $sql = "UPDATE {$this->table} SET status = 'resolved' WHERE id = ?";

        $stmt = mysqli_prepare($this->conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);

        return mysqli_stmt_execute($stmt);
    }
}