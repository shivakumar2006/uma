<?php

require_once "../config/db.php";
require_once __DIR__ . "/../../config/app.php";
require_once "../models/syllabus.php";

$syllabus = new Syllabus($conn);


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $subject = $_POST["subject"];
    $class_name = $_POST["class_name"];
    $year = $_POST["year"];

    $fileName = $_FILES["file"]["name"];
    $tmp = $_FILES["file"]["tmp_name"];

    // ✅ File validation
    $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if ($ext !== "pdf") {
        die("Only PDF file allowed");
    }

    // ✅ Unique filename
    $newFileName = time() . "_" . $fileName;

    $uploadDir = __DIR__ . "/../uploads/";

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    
    $newFileName = time() . "_" . $_FILES["file"]["name"];
    $uploadPath = $uploadDir . $newFileName;
    
    if (!move_uploaded_file($_FILES["file"]["tmp_name"], $uploadPath)) {
        die("File upload failed");
    }
    
        // ✅ Save in DB
        $result = $syllabus->upload($subject, $class_name, $year, $newFileName);
    
        if ($result) {
            header("Location: " . BASE_URL . "index.php?page=syllabus&success=1");
            exit();
        } else {
            echo "Failed to upload syllabus";
        }
    }


if (isset($_GET["delete"])) {

    $id = $_GET["delete"];

    // ✅ Get file name from DB first
    $stmt = $conn->prepare("SELECT file_path FROM syllabus WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $row = $res->fetch_assoc();

    if ($row) {

        $filePath = "../uploads/" . $row['file_path'];

        // ✅ Delete file from folder
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        // ✅ Delete from DB
        $syllabus->delete($id);
    }

    header("Location: " . BASE_URL . "index.php?page=syllabus&success=1");
    exit();
}