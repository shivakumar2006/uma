<?php

require_once __DIR__ . "/../config/db.php";
require_once __DIR__ . "/../../config/app.php";
require_once __DIR__ . "/../models/notice.php";

$notice = new Notice($conn);

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $title = $_POST["title"];
    $description = $_POST["description"];
    $category = $_POST["category"];
    $priority = $_POST["priority"];
    $posted_by = $_POST["posted_by"];

    $fileName = null;

    // Handle file upload safely
    if (!empty($_FILES["file"]["name"])) {

        $file = $_FILES["file"];
        $tmp = $file["tmp_name"];
        
        $ext = pathinfo($file["name"], PATHINFO_EXTENSION);
        $fileName = time() . "_" . uniqid() . "." . $ext;
        
        $uploadDir = __DIR__ . "/../../../uploads/";
        
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
    
        if (!move_uploaded_file($tmp, $uploadDir . $fileName)) {
            die("File upload failed");
        }
    }

    // Save in DB
    $result = $notice->create(
        $title, 
        $description,
        $category,
        $priority,
        $fileName,
        $posted_by
    );

    if ($result) {
        header("Location: " . BASE_URL . "admin-panel/index.php?page=notice-board&success=1");
        exit();
    } else {
        echo "Failed to create notice";
    }

    // if ($result) {
    //     echo "INSERT SUCCESS";
    //     exit();
    // } else {
    //     echo "INSERT FAILED";
    //     exit();
    // }
}