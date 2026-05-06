<?php

class Communication {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    // CREATE COMMUNICATION
    public function create($data) {

        $sql = "INSERT INTO communications 
            (type, audience_type, class_id, subject, message) 
            VALUES (?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($this->conn, $sql);

        mysqli_stmt_bind_param(
            $stmt,
            "ssiss",
            $data['type'],
            $data['audience_type'],
            $data['class_id'],
            $data['subject'],
            $data['message']
        );

        mysqli_stmt_execute($stmt);

        return mysqli_insert_id($this->conn);
    }

    // GET USERS BASED ON AUDIENCE
    public function getRecipients($audienceType, $classId = null, $userIds = []) {

        if ($audienceType == "all_students") {
            $sql = "SELECT * FROM users WHERE role = 'student'";
        }

        elseif ($audienceType == "all_teachers") {
            $sql = "SELECT * FROM users WHERE role = 'teacher'";
        }

        elseif ($audienceType == "specific_class") {
            $sql = "SELECT * FROM users WHERE class_id = ?";
            $stmt = mysqli_prepare($this->conn, $sql);
            mysqli_stmt_bind_param($stmt, "i", $classId);
            mysqli_stmt_execute($stmt);
            return mysqli_fetch_all(mysqli_stmt_get_result($stmt), MYSQLI_ASSOC);
        }

        elseif ($audienceType == "specific_students") {
            $ids = implode(",", $userIds);
            $sql = "SELECT * FROM users WHERE id IN ($ids)";
        }

        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    // SAVE RECIPIENT
    public function saveRecipient($commId, $userId, $status) {

        $sql = "INSERT INTO communication_recipients 
            (communication_id, user_id, status) 
            VALUES (?, ?, ?)";

        $stmt = mysqli_prepare($this->conn, $sql);
        mysqli_stmt_bind_param($stmt, "iis", $commId, $userId, $status);

        mysqli_stmt_execute($stmt);
    }
}