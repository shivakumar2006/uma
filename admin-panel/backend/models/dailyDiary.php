<?php

class DailyDiary {
    private $conn; 

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create($title, $description, $category, $priority, $class_range, $staff_instruction, $event_date, $event_time, $file){
        $stmt = $this->conn->prepare(
            "INSERT INTO daily_diary
            (title, description, category, priority, class_range, staff_instruction, event_date, event_time, file_path)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"
        );

        $stmt->bind_param("ssssssssi", $title, $description, $category, $priority, $class_range, $staff_instruction, $event_date, $event_time, $file);

        return $stmt->execute();
    }

    public function getAll() {
        $query = "SELECT * FROM daily_diary ORDER BY created_at DESC";
        return mysqli_query($this->conn, $query);
    }

    public function getById($id) {
        $query = "SELECT * FROM daily_diary WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result();
    }

    public function update($id, $title, $description, $category, $priority, $class_range, $staff_instruction, $event_date, $event_time, $file) {
        $query = "UPDATE daily_diary SET title = ?, description = ?, category = ?, priority = ?, class_range = ?, staff_instructions = ?, event_date = ?, event_time = ?, file_path = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssssssss", $title, $description, $category, $priority, $class_range, $staff_instruction, $event_date, $event_time, $file, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM daily_diary WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}

?>