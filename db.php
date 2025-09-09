<?php
$host = getenv('DB_HOST') ?: 'mariadb'; 
$db   = getenv('DB_NAME') ?: 'omarkahouach';
$user = getenv('DB_USERNAME') ?: 'omar';
$pass = getenv('DB_PASSWORD') ?: 'khaled';


$dsn = "mysql:host=$host;port=3306;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database verbinding mislukt: " . $e->getMessage());
}
