<?php

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];

// detect current script path 
$scriptName = dirname($_SERVER['SCRIPT_NAME']);

// normalize (remove trailing slash)
$basePath = rtrim($scriptName, '/');

define("BASE_URL", $protocol . $host . $basePath . "/");