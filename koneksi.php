<?php
    $host = 'localhost';
    $database = 'db_login';
    $user = 'root';
    $pass = '';

    $db1 = mysqli_connect($host, $user, $pass, $database);

    if ($db1->connect_error) {
        die('Connection failed: ' . $db1->connect_error);
    }