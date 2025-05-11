<?php
session_start();
include 'config.php';

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}

$id = $_GET["id"] ?? 0;

// حذف العربية
$stmt = $conn->prepare("DELETE FROM cars WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();

// الرجوع لصفحة العربيات
header("Location: view_cars.php");
exit();