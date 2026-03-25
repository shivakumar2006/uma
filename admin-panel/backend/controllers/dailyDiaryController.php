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

    $fileName = "";

    if(isset($_FILES["file"]) && $_FILES["file"]["name"] != ""){
        $fileName = $_FILES["file"]["name"];
        $tmp = $_FILES["file"]["tmp_name"];
        move_uploaded_file($tmp, "../uploads/" . $fileName);
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
        header("Location: /uma/admin-panel/index.php?page=daily-diary&success=1");
        exit();
    }else{
        die("ERROR: " . mysqli_error($conn));
    }
}

if(isset($_GET["delete"])){

    $id = $_GET["delete"];

    $diary->delete($id);

    header("Location: /uma/admin-panel/index.php?page=daily-diary");
    exit();
}