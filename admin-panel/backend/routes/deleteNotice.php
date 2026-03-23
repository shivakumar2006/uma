<?php

require_once "../config/db.php";
require_once "../models/notice.php";

$notice = new Notice($conn);

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $data = $notice->getById($id);
    $row = $data->fetch_assoc();

    if ($row && !empty($row['file_path'])) {
        $filePath = "../../../uploads/" . $row['file_path'];

        if (file_exists($filePath)) {
            unlink($filePath); // delete file
        }
    }

    $notice->delete($id);

    header("Location: /uma/admin-panel/index.php?page=notice-board");
    exit();

}

?>