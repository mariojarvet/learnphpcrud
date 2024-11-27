<?php
$host = 'localhost';
$dbname = 'users_db';
$username = 'root'; 
$password = 'mysql'; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Ühenduse loomine ebaõnnestus: " . $e->getMessage();
}
?>
