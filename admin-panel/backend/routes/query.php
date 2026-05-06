<?php

require_once __DIR__ . "/../controllers/query.php";

$controller = new QueryController();

$action = $_GET['action'] ?? '';

switch ($action) {

    case "reply":
        $controller->sendReply();
        break;

    case "create":
        $controller->create();
        break;

    case "get_all":
        $controller->getAll();
        break;

    case "resolve":
        $controller->resolve();
        break;

    default:
        echo json_encode([
            "success" => false,
            "message" => "Invalid route"
        ]);
}