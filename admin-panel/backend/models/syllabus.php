<?php

class Syllabus {
    private $conn; 

    public function __construct($db) {
        $this->conn = $db; 
    }

    public function upload($subject, $class_name, $year, $file) {
        $stmt = $this->conn->prepare(
            "INSERT INTO syllabus (subject, class_name, year, file_path)
             VALUES (?, ?, ?, ?)"
        );

        $stmt->bind_param("ssss", $subject, $class_name, $year, $file);

        if(!$stmt->execute()){
            die("DB Error: " . $stmt->error);
        }
        return true;
    }

    public function update($id, $subject, $class_name, $year, $file_path) {

        $query = "UPDATE syllabus SET subject=?, class_name=?, year=?, file_path=? WHERE id=?";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssi", $subject, $class_name, $year, $file_path, $id);

        return $stmt->execute();
    }

    public function getAll() {
        $query = "SELECT * FROM syllabus ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->get_result();
    }

    public function delete($id) {
        $stmt = $this->conn->prepare(
            "DELETE FROM syllabus WHERE id=?"
        );

        $stmt->bind_param("i", $id);

        if(!$stmt->execute()){
            die("Delete failed: " . $stmt->error);
        }
        return true;
    }

    public function getById($id) {
        $query = "SELECT * FROM syllabus WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result();
    }
}

?>