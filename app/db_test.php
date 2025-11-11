<?php
$dsn = 'mysql:host=db;port=3306;dbname=app;charset=utf8mb4'; // コンテナ間はサービス名db
$user = 'app'; $pass = 'secret';
try {
  $pdo = new PDO($dsn, $user, $pass, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]);
  echo "DB接続OK (container db)\n";
} catch (Throwable $e) {
  http_response_code(500);
  echo "DB接続NG: " . $e->getMessage();
}
