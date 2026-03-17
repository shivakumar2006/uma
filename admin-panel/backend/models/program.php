<?php

class Program {

    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function create($title, $description, $category, $status, $file){

        $stmt = $this->conn->prepare(
            "INSERT INTO programs (title, description, category, status, file_path)
             VALUES (?, ?, ?, ?, ?)"
        );

        $stmt->bind_param("sssss", $title, $description, $category, $status, $file);

        return $stmt->execute();
    }

    public function getAll(){

        $query = "SELECT * FROM programs ORDER BY created_at DESC";

        return mysqli_query($this->conn, $query);
    }

    public function getById($id){

        $stmt = $this->conn->prepare(
            "SELECT * FROM programs WHERE id=?"
        );

        $stmt->bind_param("i", $id);
        $stmt->execute();

        return $stmt->get_result();
    }

    public function update($id, $title, $description, $category, $status, $file){

        $stmt = $this->conn->prepare(
            "UPDATE programs
             SET title=?, description=?, category=?, status=?, file_path=?
             WHERE id=?"
        );

        $stmt->bind_param("sssssi", $title, $description, $category, $status, $file, $id);

        return $stmt->execute();
    }

    public function delete($id){

        $stmt = $this->conn->prepare(
            "DELETE FROM programs WHERE id=?"
        );

        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }
}