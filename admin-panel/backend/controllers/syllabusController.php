<?php

require_once "../config/db.php";
require_once "../models/syllabus.php";

$syllabus =  new Syllabus($conn);

// upload syllabus 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $subject = $_POST["subject"];
    $class_name = $_POST["class_name"];
    $year = $_POST["year"];
    $fileName = $_FILES["file"]["name"];
    $tmp = $_FILES["file"]["tmp_name"];

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);

    if ($ext !== "pdf") {
        die("Only pdf file allowed");
    }

    $newFileName = time() . "_" . $fileName; 

    $uploadPath = "../uploads/" . $newFileName;

    move_uploaded_file($tmp, $uploadPath);

    $result = $syllabus->upload($subject, $class_name, $year, $newFileName);

    if ($result) {
        header("Location: ../../admin-panel/syllabus.php");
        exit();
    } else {
        echo "failed to upload syllabus";
    }
}

// delete 
if (isset($_GET["delete"])){
    $id = $_GET["delete"];

    $syllabus->delete($id);

    $filePath = "../uploads/" . $fileName;
    if (file_exists($filePath)) {
        unlink($filePath);
    }

    header("Location: ../../admin-panel/syllabus.php");
    exit();
}

?>