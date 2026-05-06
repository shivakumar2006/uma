<?php

function loadEnv($path) {

    if (!file_exists($path)) {
        die(".env file not found: " . $path);
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach($lines as $line) {

        $line = trim($line);

        if ($line === '' || strpos($line, '#') === 0) {
            continue;
        }

        if (strpos($line, '=') === false) {
            continue;
        }

        list($name, $value) = explode("=", $line, 2);

        $_ENV[trim($name)] = trim($value);
    }
}

?>