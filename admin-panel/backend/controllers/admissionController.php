<?php

require_once "../config/db.php";
require_once __DIR__ . "/../../config/app.php";
require_once "../models/Admission.php";

$admission = new Admission($conn);

// decide action
$action = $_GET['action'] ?? '';

/**
 * =========================
 * CREATE ADMISSION
 * =========================
 */
if ($action === "create" && $_SERVER["REQUEST_METHOD"] === "POST") {

    $child_name    = $_POST["child_name"];
    $father_name   = $_POST["father_name"];
    $mother_name   = $_POST["mother_name"];
    $mobile        = $_POST["mobile"];
    $class         = $_POST["class"];
    $address       = $_POST["address"];
    $admission_date= $_POST["admission_date"];
    $captcha       = $_POST["captcha"];

    if ($captcha != "8") {
        header("Location: " . BASE_URL . "index.php?page=Admission-Forms&error=captcha");
        exit();
    }

    $result = $admission->create(
        $child_name,
        $father_name,
        $mother_name,
        $mobile,
        $class,
        $address,
        $admission_date
    );

    if ($result) {
        header("Location: " . BASE_URL . "index.php?page=Admission-Forms&success=1");
    } else {
        header("Location: " . BASE_URL . "index.php?page=Admission-Forms&error=1");
    }
    exit();
}

/**
 * =========================
 * UPDATE STATUS
 * =========================
 */
if ($action === "update_status" && $_SERVER["REQUEST_METHOD"] === "POST") {

    $id = $_POST["id"];
    $status = $_POST["status"];

    $allowed = ['pending', 'approved', 'rejected'];

    if (!in_array($status, $allowed)) {
        header("Location: " . BASE_URL . "admin/index.php?page=Admission-Forms&error=invalid");
        exit();
    }

    $result = $admission->updateStatus($id, $status);

    if ($result) {
        header("Location: " . BASE_URL . "admin/index.php?page=Admission-Forms&success=updated");
    } else {
        header("Location: " . BASE_URL . "admin/index.php?page=Admission-Forms&error=1");
    }
    exit();
}

/**
 * =========================
 * GET ALL (for admin include)
 * =========================
 */
if ($action === "get_all") {
    $result = $admission->getAll();
}