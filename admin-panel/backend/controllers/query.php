<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . "/../models/query.php";
require_once __DIR__ . "/../config/db.php";
require_once __DIR__ . "/../../config/app.php";
require_once __DIR__ . "/../../config/env.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . "/../../../vendor/autoload.php";

class QueryController {

    private $model;

    public function __construct() {
        global $conn;
        $this->model = new Query($conn);
    }

    // CREATE
    public function create() {

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $data = [
                "name" => $_POST["name"] ?? '',
                "email" => $_POST["email"] ?? '',
                "address" => $_POST["address"] ?? '',
                "phone" => $_POST["phone"] ?? '',
                "message" => $_POST["message"] ?? ''
            ];

            $result = $this->model->create($data);

            if ($result) {
                header("Location: " . BASE_URL . "contact.php?success=1");
                exit();
            } else {
                echo "Query insert failed";
                exit();
            }
        }
    }

    // SEND REPLY
    public function sendReply() {

        $email = $_POST['email'] ?? '';
        $message = $_POST['message'] ?? '';
        $queryId = $_POST['query_id'] ?? null;

        if (!$email || !$message) {
            echo "Missing email or message";
            exit();
        }

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = $_ENV['MAIL_HOST'];
            $mail->SMTPAuth = true;

            $mail->Username = $_ENV['MAIL_USERNAME'];
            $mail->Password = $_ENV['MAIL_PASSWORD'];

            $mail->SMTPSecure = $_ENV['MAIL_ENCRYPTION'];
            $mail->Port = $_ENV['MAIL_PORT']; 

            $mail->SMTPOptions = [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                ]
            ];

            $mail->setFrom($_ENV['MAIL_FROM'], $_ENV['MAIL_FROM_NAME']);
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Reply to your query';
            $mail->Body = nl2br($message);

            $mail->send();

            // mark resolved
            if ($queryId) {
                $this->model->markResolved($queryId);
            }

            header("Location: " . BASE_URL . "admin-panel/index.php?page=query-handler&replied=1");
            exit();

        } catch (Exception $e) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    }

    // GET ALL
    public function getAll() {
        $queries = $this->model->getAll();
        echo json_encode($queries);
    }

    // MARK RESOLVED
    public function resolve() {
        $id = $_GET['id'] ?? null;

        if ($id) {
            $this->model->markResolved($id);
            header("Location: " . BASE_URL . "admin-panel/index.php?page=query-handler");
            exit();
        }
    }
}