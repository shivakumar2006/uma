<?php

require_once __DIR__ . "/../../config/env.php";

$host = $_ENV['DB_HOST'] ?? 'localhost'; 
$user = $_ENV['DB_USER'] ?? 'root'; 
$password = $_ENV['DB_PASSWORD'] ?? "";
$database = $_ENV['DB_NAME'] ?? "school_db";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

