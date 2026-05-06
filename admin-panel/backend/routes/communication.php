<?php

require_once __DIR__ . "/../controllers/CommunicationController.php";

$controller = new CommunicationController();

$action = $_GET['action'] ?? '';

switch ($action) {

    case "send":
        $controller->send();
        break;

    default:
        echo "Invalid route";
}