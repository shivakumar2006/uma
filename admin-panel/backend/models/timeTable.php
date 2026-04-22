<?php

class TimeTable {
    private $conn; 

    public function __construct($db) {
        $this->conn = $db; 
    }

    public function upload($class_name, $file) {
        $stmt = $this->conn->prepare(
            "INSERT INTO timetable (class_name, file_path)
            VALUES (?, ?)"
        ); 

        $stmt->bind_param("ss", $class_name, $file);

        return $stmt->execute();
    }

    public function update($id, $class_name, $file_path) {

        $query = "UPDATE timetable SET class_name=?, file_path=? WHERE id=?";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssi", $class_name, $file_path, $id);

        return $stmt->execute();
    }

    public function getByClass($class_name) {
        $query = "SELECT * FROM timetable WHERE class_name = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $class_name);
        $stmt->execute();
        return $stmt->get_result(); 
    }

    public function delete($id) {
        $stmt = $this->conn->prepare(
            "DELETE FROM timetable WHERE id=?"
        );

        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }
}

?>