<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'Mitch');
    define('DB_PASS', 'password');
    define('DB_NAME', 'php_crash');

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if($conn->connect_error) {
        die('Connection Failed ' . $conn->connect_error);
    }

?>
