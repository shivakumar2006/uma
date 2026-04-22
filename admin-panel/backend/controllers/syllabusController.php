<?php

require_once "../config/db.php";
require_once __DIR__ . "/../../config/app.php";
require_once "../models/syllabus.php";

$syllabus = new Syllabus($conn);

// create
if ($_SERVER["REQUEST_METHOD"] === "POST" && empty($_POST["id"])) {

    $subject = $_POST["subject"];
    $class_name = $_POST["class_name"];
    $year = $_POST["year"];

    $fileName = $_FILES["file"]["name"];
    $tmp = $_FILES["file"]["tmp_name"];

    $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if ($ext !== "pdf") {
        die("Only PDF file allowed");
    }

    $newFileName = time() . "_" . $fileName;

    $uploadDir = realpath(__DIR__ . "/../../../") . "/uploads/";

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $uploadPath = $uploadDir . $newFileName;

    if (!move_uploaded_file($tmp, $uploadPath)) {
        die("File upload failed");
    }

    $result = $syllabus->upload($subject, $class_name, $year, $newFileName);

    header("Location: " . BASE_URL . "admin-panel/index.php?page=syllabus&success=1");
    exit();
}


// update 
if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["id"])) {

    $id = $_POST["id"];
    $subject = $_POST["subject"];
    $class_name = $_POST["class_name"];
    $year = $_POST["year"];

    $fileName = $_FILES["file"]["name"];

    if (!empty($fileName)) {

        $tmp = $_FILES["file"]["tmp_name"];
        $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        if ($ext !== "pdf") {
            die("Only PDF file allowed");
        }

        $newFileName = time() . "_" . $fileName;

        $uploadDir = realpath(__DIR__ . "/../../../") . "/uploads/";
        $uploadPath = $uploadDir . $newFileName;

        move_uploaded_file($tmp, $uploadPath);

        // ❗ old file delete
        $oldFile = $_POST["old_file"];
        $oldPath = $uploadDir . $oldFile;

        if (file_exists($oldPath)) {
            unlink($oldPath);
        }

    } else {
        $newFileName = $_POST["old_file"];
    }

    $syllabus->update($id, $subject, $class_name, $year, $newFileName);

    header("Location: " . BASE_URL . "admin-panel/index.php?page=syllabus&success=updated");
    exit();
}


// delete 
if (isset($_GET["delete"])) {

    $id = $_GET["delete"];

    $stmt = $conn->prepare("SELECT file_path FROM syllabus WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $row = $res->fetch_assoc();

    if ($row) {

        $uploadDir = realpath(__DIR__ . "/../../../") . "/uploads/";
        $filePath = $uploadDir . $row['file_path'];

        if (file_exists($filePath)) {
            unlink($filePath);
        }

        $syllabus->delete($id);
    }

    header("Location: " . BASE_URL . "admin-panel/index.php?page=syllabus&success=1");
    exit();
}