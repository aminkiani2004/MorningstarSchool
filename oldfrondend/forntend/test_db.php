<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "Step 1: PHP is running ✅<br>";

require __DIR__ . '/includes/db.php';
echo "Step 2: db.php loaded ✅<br>";

$stmt = $pdo->query("SELECT DATABASE() AS db, NOW() AS t");
$row = $stmt->fetch();

echo "Step 3: Connected ✅<br>";
echo "DB: " . ($row['db'] ?? 'NULL') . "<br>";
echo "Time: " . ($row['t'] ?? 'NULL') . "<br>";