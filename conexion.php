<?php
// Conexión a MySQL (XAMPP por defecto: usuario root, sin contraseña)
$host = 'localhost';
$bd   = 'PERSONAL';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$bd;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Error de conexión: ' . $e->getMessage());
}
