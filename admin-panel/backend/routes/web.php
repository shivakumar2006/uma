<?php

require_once __DIR__ . "/../config/db.php";
require_once __DIR__ . "/../controllers/AuthController.php";

$controller = new AuthController($conn);

$route = $_GET['route'] ?? '';

switch ($route) {

    case 'register':
        $controller->register();
        break;

    case 'login':
        $controller->login();
        break;

    case 'forgot-password':
        $controller->forgotPassword();
        break;

    case 'reset-password':
        $controller->resetPassword();
        break;
}