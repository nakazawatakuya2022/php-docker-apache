<?php
$price = 1200; $tax = 0.1;
$total = $price + $price * $tax;
echo "<h1>Docker版 LAMP (Apache)</h1>";
echo "<p>合計（税込）: {$total}円</p>";
