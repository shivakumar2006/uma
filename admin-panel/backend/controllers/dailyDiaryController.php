<?php

require_once __DIR__ . "/../config/db.php";
require_once __DIR__ . "/../../config/app.php";
require_once __DIR__ . "/../models/dailyDiary.php";

$diary = new DailyDiary($conn);

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $title = $_POST["title"];
    $description = $_POST["description"];
    $category = $_POST["category"];
    $priority = $_POST["priority"];
    $class_range = $_POST["class_range"];
    $staff_instruction = $_POST["staff_instruction"];
    $event_date = $_POST["event_date"];
    $event_time = $_POST["event_time"];

    $fileName = "";

    if(isset($_FILES["file"]) && $_FILES["file"]["name"] != ""){

        $file = $_FILES["file"];
        $originalName = basename($file["name"]);
        $tmp = $file["tmp_name"];

        // file size limit
        $maxSize = 5 * 1024 * 1024; // 5MB
        if($file["size"] > $maxSize){
            die("File too large. Max 5MB allowed");
        }

        // real mime check
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $tmp);
        finfo_close($finfo);

        if($mime !== 'application/pdf'){
            die("Only valid PDF files are allowed");
        }

        // safe filename
        $ext = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));

        if($ext !== 'pdf'){
            die("Only PDF allowed");
        }

        $fileName = time() . "_" . uniqid() . "." . $ext;

        $uploadDir = __DIR__ . "/../../../uploads/";

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $uploadPath = $uploadDir . $fileName;

        if(!move_uploaded_file($tmp, $uploadPath)){
            die("File upload failed");
        }
    }

    $result = $diary->create(
        $title,
        $description,
        $category,
        $priority,
        $class_range,
        $staff_instruction,
        $event_date,
        $event_time,
        $fileName
    );

    if($result){
        header("Location: " . BASE_URL . "admin-panel/index.php?page=daily-diary&success=1");
        exit();
    }else{
        die("ERROR: " . mysqli_error($conn));
    }
}

if(isset($_GET["delete"])){

    $id = $_GET["delete"];

    $diary->delete($id);

    header("Location: " . BASE_URL . "admin-panel/index.php?page=daily-diary");
    exit();
}