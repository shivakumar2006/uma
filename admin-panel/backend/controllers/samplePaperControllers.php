<?php

require_once __DIR__ . "/../config/db.php";
require_once __DIR__ . "/../../config/app.php";
require_once __DIR__ . "/../models/samplePapers.php";

$paper = new SamplePaper($conn);

/* CREATE */

// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";
// echo $uploadPath;
// exit();

if ($_SERVER["REQUEST_METHOD"] === "POST" && empty($_POST["id"])) {

    $subject = $_POST["subject"];
    $class_name = $_POST["class_name"];
    $year = $_POST["year"];

    $fileName = $_FILES["file"]["name"];
    $tmp = $_FILES["file"]["tmp_name"];

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);

    if($ext !== "pdf"){
        die("Only PDF allowed");
    }

    $newFile = time() . "_" . $fileName;

    $uploadDir = realpath(__DIR__ . "/../../../") . "/uploads/";

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $uploadPath = $uploadDir . $newFile;

    if (!move_uploaded_file($tmp, $uploadPath)) {
        die("Upload failed");
    }

    $paper->create($subject, $class_name, $year, $newFile);

    header("Location: " . BASE_URL . "admin-panel/index.php?page=sample-papers&success=1");
    exit();
}

/* UPDATE */

if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["id"])) {

    $id = $_POST["id"];
    $subject = $_POST["subject"];
    $class_name = $_POST["class_name"];
    $year = $_POST["year"];

    $fileName = $_FILES["file"]["name"];
    $tmp = $_FILES["file"]["tmp_name"];
    
    $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    
    if($ext !== "pdf"){
        die("Only PDF allowed");
    }
    
    $newFile = time() . "_" . uniqid() . ".pdf";
    
    $uploadDir = realpath(__DIR__ . "/../../../") . "/uploads/";
    
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    
    $uploadPath = $uploadDir . $newFile;
    
    if (!move_uploaded_file($tmp, $uploadPath)) {
        die("Upload failed");
    }

    $paper->update($id, $subject, $class_name, $year, $newFile);

    header("Location: " . BASE_URL . "admin-panel/index.php?page=sample-papers&success=1");
    exit();
}

/* DELETE */

if(isset($_GET["delete"])){

    $id = $_GET["delete"];

    $paper->delete($id);

    header("Location: " . BASE_URL . "admin-panel/index.php?page=sample-papers&success=1");
    exit();
}