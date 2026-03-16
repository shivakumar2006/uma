<?php

require_once "../config/db.php";
require_once "../models/notice.php";

$notice = new Notice($conn);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $category = $_POST["category"];
    $priority = $_POST["priority"];
    $file = $_POST["file"];
    $posted_by = $_POST["posted_by"];

    $fileName = $_FILES["file"]["name"];
    $tmp = $_FILES["file"]["tmp_name"];

    $uploadPath = "../uploads/" . $fileName;

    move_uploaded_file($tmp, $uploadPath);

    $result = $notice->create(
        $title, 
        $description,
        $category,
        $priority,
        $fileName,
        $posted_by
    );

    if ($result) {
        header("Location: ../../admin-panel/notice-board.php?success=1");
    } else {
        echo("Failed to create or add notice");
    }
}

?>