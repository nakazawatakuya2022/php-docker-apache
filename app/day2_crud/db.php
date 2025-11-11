<?php
$dsn = 'mysql:host=db;port=3306;dbname=app;charset=utf8mb4';
$user = 'app';
$pass = 'secret';
try {
  $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
  echo "DB接続失敗: " . $e->getMessage();
  exit;
}
?>

