<?php
session_start();
include 'config.php';

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $model = $_POST["model"];
    $price = $_POST["price"];

    $stmt = $conn->prepare("INSERT INTO cars (name, model, price) VALUES (?, ?, ?)");
    $stmt->bind_param("ssd", $name, $model, $price);
    $stmt->execute();

    header("Location: view_cars.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add Car</title>
</head>
<body>

<h2>Add New Car</h2>

<form method="post" action="">
    <label>Car Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Model:</label><br>
    <input type="text" name="model" required><br><br>

    <label>Price:</label><br>
    <input type="number" step="0.01" name="price" required><br><br>

    <button type="submit">Add Car</button>
</form>

<p><a href="dashboard.php">Back to Dashboard</a></p>

</body>
</html>