<?php
    $host = 'localhost';
    $database = 'db_login';
    $user = 'root';
    $pass = '';

    $db1 = new mysqli($host, $user, $pass, $database);

    if ($db1->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }