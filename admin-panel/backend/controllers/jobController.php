<?php

require_once "../config/db.php";
require_once "../models/job.php";

$job = new job($conn);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $category = $_POST["category"];
    $experience = $_POST["experience"];
    $status = $_POST["status"];

    $fileName = $FILES["file"]["name"];
    $tmp = $FILES["file"]["tmp_name"];

    $uploadPath = "../uploads/" . $fileName;

    move_uploaded_file($tmp, $uploadPath);

    $result = $job->create(
        $title,
        $description,
        $category,
        $experience,
        $fileName,
        $status
    );

    if ($result) {
        header("Location: ../../admin-panel/career.php?success=1");
        exit();
    } else {
        echo("Failed to create job post");
    }
}

// delete job 
if (isset($_GET["delete"])) {
    $id = $_GET["delete"];
    $job->delete($id);
    header("Location: ../../admin-panel/career.php");
    exit();
}

?>