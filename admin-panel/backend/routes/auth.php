<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . "/../config/db.php";
require_once __DIR__ . "/../controllers/authControllers.php";

$auth = new AuthController($conn);

$action = $_GET['action'] ?? '';

switch ($action) {

    case 'register':
        $auth->register();
        break;

    case 'login':
        $auth->login();
        break;

    case 'forgot':
        $auth->forgotPassword();
        break;

    case 'reset':
        $auth->resetPassword();
        break;

    case 'logout':
        $auth->logout();
        break;

    default:
        echo "Invalid action";
}