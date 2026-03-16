<?php

class Notice {

    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function create($title, $description, $category, $priority, $file, $posted_by) {

        $stmt = $this->conn->prepare(
            "INSERT INTO notices
            (title, description, category, priority, file_path, posted_by)
            VALUES (?, ?, ?, ?, ?, ?)"
        );

        $stmt->bind_param("ssssss", $title, $description, $category, $priority, $file, $posted_by);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function getAll() {
        $query = "SELECT * FROM notices ORDER BY created_at DESC";

        return mysqli_query($this->conn, $query);
    }

    public function getById($id) {
        $query = "SELECT * FROM notices WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result();
    }

    public function update($id, $title, $description, $category, $priority, $file, $posted_by) {
        $query = "UPDATE notices SET title = ?, description = ?, category = ?, priority = ?, file_path = ?, posted_by = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssssi", $title, $description, $category, $priority, $file, $posted_by, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM notices WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}

?>