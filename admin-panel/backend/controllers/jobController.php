<?php

require_once __DIR__ . "/../config/db.php";
require_once __DIR__ . "/../../config/app.php";
require_once __DIR__ . "/../models/job.php";

$job = new Job($conn);

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = $_POST["id"] ?? null; 
    $title = $_POST["title"];
    $description = $_POST["description"];
    $category = $_POST["category"];
    $experience = $_POST["experience"];
    $status = $_POST["status"];

    $fileName = "";

    if(isset($_FILES["file"]) && $_FILES["file"]["name"] != ""){

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

    // CORRECT LOGIC
    if($id){
        // UPDATE
        $result = $job->update($id, $title, $description, $category, $experience, $fileName, $status);
    } else {
        // CREATE
        $result = $job->create($title, $description, $category, $experience, $fileName, $status);
    }

    if ($result) {
        header("Location: " . BASE_URL . "admin-panel/index.php?page=career&success=1");
        exit();
    } else {
        die("DB Error: " . mysqli_error($conn));
    }
}

// DELETE
if (isset($_GET["delete"])) {
    $id = intval($_GET["delete"]);
    $job->delete($id);

    header("Location: " . BASE_URL . "admin-panel/index.php?page=career");
    exit();
}

?>