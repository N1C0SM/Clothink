<?php
$host = 'localhost'; 
$db = 'clothink'; 
$user = 'root'; 
$pass = '';



try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

$queryCollections = 'SELECT * FROM collections';
$collections = $pdo->query($queryCollections)->fetchAll(PDO::FETCH_ASSOC);
$queryProducts = 'SELECT * FROM products';
$products = $pdo->query($queryProducts)->fetchAll(PDO::FETCH_ASSOC);

?>