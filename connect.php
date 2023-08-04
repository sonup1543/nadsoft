<?php
$dsn = "mysql:host=localhost;dbname=test";
$user = "root";
$password = ""; 
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

$pdo = new PDO($dsn, $user, $password, $options);
