<?php

class Job {
    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

   public function create($title, $description, $category, $experience, $file, $status){
    $stmt = $this->conn->prepare(
        "INSERT INTO jobs (title, description, category, experience, file_path, status)
        VALUES (?, ?, ?, ?, ?, ?)"
    );

    $stmt->bind_param("ssssss", $title, $description, $category, $experience, $file, $status);

    return $stmt->execute();
}

    public function getAll() {
        $query = "SELECT * FROM jobs ORDER BY created_at DESC";
        return mysqli_query($this->conn, $query);
    }

    public function getById($id) {
        $query = "SELECT * FROM jobs WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result();
    }

    public function update($id, $title, $description, $category, $experience, $file, $status){
    $query = "UPDATE jobs 
              SET title = ?, description = ?, category = ?, experience = ?, file_path = ?, status = ? 
              WHERE id = ?";

    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("ssssssi", $title, $description, $category, $experience, $file, $status, $id);

    return $stmt->execute();
}

    public function delete($id) {
        $query = "DELETE FROM jobs WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}

?>