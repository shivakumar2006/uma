<?php

class Syllabus {
    private $conn; 

    public function __construct($db) {
        $this->conn = $db; 
    }

    public function upload($subject, $class_name, $year, $file) {
        $stmt = $this->conn->prepare(
            "INSERT INTO syllabus (subject, class_name, year, file_path)
            VALUE (?, ?, ?, ?)"
        );

        $stmt->bind_param("ssss", $subject, $class_name, $year, $file);

        return $stmt->execute();
    }

    public function getAll() {
        $query = "SELECT * FROM syllabus ORDER BY created_at DESC";

        return mysqli_query($this->conn, $query);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare(
            "DELETE FROM syllabus WHERE id=?"
        );

        $stmt->bind_param("i", $id);

        return $stmt->execute();
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