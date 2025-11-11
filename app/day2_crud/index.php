<?php
require_once 'db.php';
$stmt = $pdo->query("SELECT * FROM items ORDER BY id DESC");
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>商品一覧</title>
</head>
<body>
  <h1>商品一覧</h1>
  <table border="1">
    <tr><th>ID</th><th>商品名</th><th>価格</th></tr>
    <?php foreach ($items as $item): ?>
      <tr>
        <td><?= htmlspecialchars($item['id']) ?></td>
        <td><?= htmlspecialchars($item['name']) ?></td>
        <td><?= htmlspecialchars($item['price']) ?>円</td>
      </tr>
    <?php endforeach; ?>
  </table>

  <h2>商品追加</h2>
  <form action="add.php" method="post">
    <input type="text" name="name" placeholder="商品名">
    <input type="number" name="price" placeholder="価格">
    <button type="submit">追加</button>
  </form>
</body>
</html>

