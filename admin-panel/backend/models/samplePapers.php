<?php

class SamplePaper {
    private $conn; 

    private function __construct($db);
    $this->conn = $db;

    public function create($subject, $class_name, $year, $file) {
        $stmt = $this->conn->prepare(
            "INSERT INTO sample_papers (subject, class_name, year, file_path)
            VALUES (?, ?, ?, ?)"
        );

        $stmt->bind_param("ssss", $subject, $class_name, $year, $file);

        return $stmt->execute();
    }

    public function getAll() {
        $query = "SELECT * FROM sample_papers ORDER BY created_at DESC";

        return mysqli_query($this->conn, $query);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare(
            "SELECT * FROM sample_papers WHERE id=?" 
        );

        $stmt->bind_param("i", $id);

        $stmt->execute();

        return $stmt->get_result();
    }

    public function update($id, $subject, $class_name, $year, $file) {
        $stmt = $this->conn->prepare(
            "UPDATE sample_papers SET subject=?, class_name=?, year=?, file_path=? WHERE id=?"
        );

        $stmt->bind_param("ssssi", $subject, $class_name, $year, $file, $id);

        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->conn->prepare(
            "DELETE FROM sample_papers WHERE id=?"
        );

        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }
}

?>