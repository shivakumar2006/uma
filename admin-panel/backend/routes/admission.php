<?php

require_once __DIR__ . "/../controllers/AdmissionController.php";

$controller = new AdmissionController();

$action = $_GET['action'] ?? '';

switch ($action) {

    case "create":
        $controller->create();
        break;

    case "get_all":
        $controller->getAll();
        break;

    case "update_status":
        $controller->updateStatus();
        break;

    default:
        echo json_encode([
            "success" => false,
            "message" => "Invalid route"
        ]);
} 