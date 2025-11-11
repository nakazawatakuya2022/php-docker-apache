<?php
require_once 'db.php';

$name  = $_POST['name'] ?? '';
$price = $_POST['price'] ?? 0;

if ($name && $price) {
  $stmt = $pdo->prepare("INSERT INTO items (name, price) VALUES (?, ?)");
  $stmt->execute([$name, $price]);
}

header('Location: index.php');

