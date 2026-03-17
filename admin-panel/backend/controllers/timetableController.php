<?php

require_once "../config/db.php";
require_once "../models/timeTable.php";

$timetable = new TimeTable($conn);

// upload timetable 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $class_name = $_POST["class_name"];
    $fileName = $_FILES["file"]["name"];
    $tmp = $_FILES["file"]["tmp_name"];

    $text = pathinfo($fileName, PATHINFO_EXTENSION);

    // allow only pdf 
    if ($ext !== "pdf") {
        die("Only pdf files are allowed");
    }

    $newFileName = time() . "_" . $fileName;

    $uploadPath = "../uploads/" . $newFileName;

    move_uploaded_file($tmp, $uploadPath); 

    $result = $timetable->upload($class_name, $newFileName);

    if ($result) {
        header("Location: ../../admin-panel/timetable.php?success=1");
        exit();
    } else {
        echo("Failed to upload timetable");
    }
}

// delete 
if (isset($_GET["delete"])) {
    $id = $_GET["delete"];
    $timetable->delete($id);
    header("Location: ../../admin-panel/timetable.php");
    exit();
}

?>