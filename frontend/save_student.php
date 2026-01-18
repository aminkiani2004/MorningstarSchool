<?php
session_start();
require __DIR__ . "/includes/db.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: add_more.php");
    exit;
}

$fullName    = trim($_POST["student_name"] ?? "");
$class       = trim($_POST["class"] ?? "");
$parentName  = trim($_POST["parent_name"] ?? "");
$parentPhone = trim($_POST["parent_phone"] ?? "");

if ($fullName === "" || $parentName === "" || $parentPhone === "") {
    header("Location: add_more.php?err=Please+fill+all+fields");
    exit;
}

// Split name
$parts = preg_split('/\s+/', $fullName);
$firstName = $parts[0] ?? "";
$lastName  = (count($parts) > 1) ? implode(" ", array_slice($parts, 1)) : "-";

// Insert student
$stmt = $pdo->prepare("
    INSERT INTO student (First_Name, Last_Name, Class, Parent_Name, Parent_Phone)
    VALUES (?, ?, ?, ?, ?)
");
$stmt->execute([$firstName, $lastName, $class, $parentName, $parentPhone]);

$newId = $pdo->lastInsertId();

header("Location: students.php?added=" . urlencode($newId));
exit;