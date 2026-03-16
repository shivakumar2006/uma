<?php

require_once "../config/db.php";
require_once "../models/dailyDiary.php";

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

    $fileName = $_FILES["file"]["name"];
    $tmp = $_FILES["file"]["tmp_name"];

    $uploadPath = "../uploads/" . $fileName;

    move_uploaded_file($tmp,$uploadPath);

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
        header("Location: ../../admin-panel/daily-diary.php?success=1");
        exit();
    }else{
        echo "Failed to add diary entry";
    }
}

/* DELETE ENTRY */

if(isset($_GET["delete"])){

    $id = $_GET["delete"];

    $diary->delete($id);

    header("Location: ../../admin-panel/daily-diary.php");
    exit();
}