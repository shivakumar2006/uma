<?php

require_once __DIR__ . "/../models/Communication.php";
require_once __DIR__ . "/../config/db.php";
require_once __DIR__ . "/../../config/app.php";
require_once __DIR__ . "/../../../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class CommunicationController {

    private $model;

    public function __construct() {
        global $conn;
        $this->model = new Communication($conn);
    }

    private function sendEmail($email, $subject, $message) {

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = $_ENV['MAIL_HOST'];
            $mail->SMTPAuth = true;

            $mail->Username = $_ENV['MAIL_USERNAME'];
            $mail->Password = $_ENV['MAIL_PASSWORD'];

            $mail->SMTPSecure = $_ENV['MAIL_ENCRYPTION'];
            $mail->Port = $_ENV['MAIL_PORT'];

            $mail->setFrom($_ENV['MAIL_FROM'], $_ENV['MAIL_FROM_NAME']);
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = nl2br($message);

            $mail->send();

        } catch (Exception $e) {
            throw new Exception($mail->ErrorInfo);
        }
    }

    public function send() {

        $type = $_POST['type'];
        $audience = $_POST['audience'];
        $classId = $_POST['class_id'] ?? null;
        $subject = $_POST['subject'] ?? null;
        $message = $_POST['message'];

        $commId = $this->model->create([
            "type" => $type,
            "audience_type" => $audience,
            "class_id" => $classId,
            "subject" => $subject,
            "message" => $message
        ]);

        // $users = [
        //     ["email" => "Umamemorial22@gmail.com"],
        //     ["email" => "Arpitsingh2925@gmail.com"],
        //     ["email" => "coderbotorobotech@gmail.com"],
        //     ["email" => "official.shivakumar06@gmail.com"]
        // ];
        $users = $this->model->getRecipients($audience, $classId);

        foreach ($users as $user) {

            try {

                if ($type == "email") {
                    $this->sendEmail($user['email'], $subject, $message);
                }

                // ❌ temporarily remove this
                // $this->model->saveRecipient(...)

            } catch (Exception $e) {
                echo "Email Error: " . $e->getMessage();
            }
        }

        header("Location: " . BASE_URL . "admin-panel/index.php?page=communication&success=1");
    }

    private function sendSMS($phone, $message) {
        // later
    }
}