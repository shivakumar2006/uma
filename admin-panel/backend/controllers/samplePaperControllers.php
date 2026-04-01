<?php

require_once "../config/db.php";
require_once "../models/SamplePaper.php";

$paper = new SamplePaper($conn);

/* CREATE */

if ($_SERVER["REQUEST_METHOD"] === "POST" && !isset($_POST["id"])) {

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

    move_uploaded_file($tmp, "../uploads/" . $newFile);

    $paper->create($subject, $class_name, $year, $newFile);

    header("Location: /uma/admin-panel/index.php?page=sample-papers&success=1");
    exit();
}

/* UPDATE */

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"])) {

    $id = $_POST["id"];
    $subject = $_POST["subject"];
    $class_name = $_POST["class_name"];
    $year = $_POST["year"];

    $fileName = $_FILES["file"]["name"];

    if(!empty($fileName)){

        $tmp = $_FILES["file"]["tmp_name"];
        $ext = pathinfo($fileName, PATHINFO_EXTENSION);

        if($ext !== "pdf"){
            die("Only PDF allowed");
        }

        $newFile = time() . "_" . $fileName;

        move_uploaded_file($tmp, "../uploads/" . $newFile);

    } else {
        $newFile = $_POST["old_file"];
    }

    $paper->update($id, $subject, $class_name, $year, $newFile);

    header("Location: /uma/admin-panel/index.php?page=sample-papers&success=1");
    exit();
}

/* DELETE */

if(isset($_GET["delete"])){

    $id = $_GET["delete"];

    $paper->delete($id);

    header("Location: /uma/admin-panel/index.php?page=sample-papers&success=1");
    exit();
}