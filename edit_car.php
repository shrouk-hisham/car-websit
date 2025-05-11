<?php
session_start();
include 'config.php';

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}

$id = $_GET["id"] ?? 0;

// لو الفورم تم إرساله
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $model = $_POST["model"];
    $price = $_POST["price"];

    $stmt = $conn->prepare("UPDATE cars SET name=?, model=?, price=? WHERE id=?");
    $stmt->bind_param("ssdi", $name, $model, $price, $id);
    $stmt->execute();

    header("Location: view_cars.php");
    exit();
}

// جلب بيانات العربية المراد تعديلها
$stmt = $conn->prepare("SELECT * FROM cars WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$car = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Car</title>
</head>
<body>

<h2>Edit Car</h2>

<form method="post" action="">
    <label>Car Name:</label><br>
    <input type="text" name="name" value="<?php echo $car['name']; ?>" required><br><br>

    <label>Model:</label><br>
    <input type="text" name="model" value="<?php echo $car['model']; ?>" required><br><br>

    <label>Price:</label><br>
    <input type="number" name="price" step="0.01" value="<?php echo $car['price']; ?>" required><br><br>

    <button type="submit">Update Car</button>
</form>

<p><a href="view_cars.php">Back to Car List</a></p>

</body>
</html>