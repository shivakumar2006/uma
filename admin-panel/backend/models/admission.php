<?php

class Admission {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function create(
        $child_name,
        $father_name,
        $mother_name,
        $mobile,
        $class,
        $address,
        $admission_date
    ) {

        $query = "INSERT INTO admissions 
        (child_name, father_name, mother_name, mobile, class, address, admission_date) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($query);

        $stmt->bind_param(
            "sssssss",
            $child_name,
            $father_name,
            $mother_name,
            $mobile,
            $class,
            $address,
            $admission_date
        );

        return $stmt->execute();
    }

    public function getAll() {
        $query = "SELECT * FROM admissions ORDER BY id DESC";
        return mysqli_query($this->conn, $query);
    }

    public function updateStatus($id, $status) {
        $query = "UPDATE admissions SET status=? WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("si", $status, $id);
        return $stmt->execute();
    }
}