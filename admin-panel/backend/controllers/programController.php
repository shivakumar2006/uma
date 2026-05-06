<?php
require_once __DIR__ . "/../config/db.php";
require_once __DIR__ . "/../../config/app.php";
require_once __DIR__ . "/../models/Program.php";

$program = new Program($conn);

/* CREATE */

if ($_SERVER["REQUEST_METHOD"] === "POST" && !isset($_POST["id"])) {

    $title = $_POST["title"];
    $description = $_POST["description"];
    $category = $_POST["category"];
    $status = $_POST["status"];

    $fileName = $_FILES["file"]["name"] ?? '';

    if(!empty($fileName)){

        $tmp = $_FILES["file"]["tmp_name"];
        $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        if($ext !== "pdf"){
            die("Only PDF allowed");
        }

        $newFile = time() . "_" . uniqid() . "." . $ext;

        $uploadDir = __DIR__ . "/../../../uploads/";

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        if (!move_uploaded_file($tmp, $uploadDir . $newFile)) {
            die("File upload failed");
        }

    } else {
        $newFile = null;
    }

    $program->create($title, $description, $category, $status, $newFile);

    header("Location: " . BASE_URL . "admin-panel/index.php?page=programs&success=1");
    exit();
}

/* UPDATE */

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"])) {

    $id = $_POST["id"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $category = $_POST["category"];
    $status = $_POST["status"];

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

    $program->update($id, $title, $description, $category, $status, $newFile);

    header("Location: " . BASE_URL . "admin-panel/index.php?page=programs&success=1");
    exit();
}

/* DELETE */

if(isset($_GET["delete"])){

    $id = $_GET["delete"];

    $program->delete($id);

    header("Location: " . BASE_URL . "admin-panel/index.php?page=programs&success=1");
    exit();
}