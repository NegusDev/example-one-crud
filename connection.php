<?php 
// CONNECTION TO OUR DATABASE
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "lead_management";


$dsn = "mysql:host=$servername;dbname=$database_name;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}



