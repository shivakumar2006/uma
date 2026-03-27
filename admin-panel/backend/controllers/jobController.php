<?php

require_once "../config/db.php";
require_once "../models/job.php";

$job = new job($conn);

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = $_POST["id"] ?? null; 
    $title = $_POST["title"];
    $description = $_POST["description"];
    $category = $_POST["category"];
    $experience = $_POST["experience"];
    $status = $_POST["status"];

    $fileName = "";

    if(isset($_FILES["file"]) && $_FILES["file"]["name"] != ""){
        $fileName = $_FILES["file"]["name"];
        $tmp = $_FILES["file"]["tmp_name"];
        move_uploaded_file($tmp, "../uploads/" . $fileName);
    }

    // ✅ CORRECT LOGIC
    if($id){
        // UPDATE
        $result = $job->update($id, $title, $description, $category, $experience, $fileName, $status);
    } else {
        // CREATE
        $result = $job->create($title, $description, $category, $experience, $fileName, $status);
    }

    if ($result) {
        header("Location: /uma/admin-panel/index.php?page=career&success=1");
        exit();
    } else {
        die("DB Error: " . mysqli_error($conn));
    }
}

// DELETE
if (isset($_GET["delete"])) {
    $id = intval($_GET["delete"]);
    $job->delete($id);

    header("Location: /uma/admin-panel/index.php?page=career");
    exit();
}

?>