<?php
session_start();
include 'config.php';

// التأكد من تسجيل الدخول
if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}

// جلب بيانات العربيات
$result = $conn->query("SELECT * FROM cars");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>View Cars</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: auto; }
        th, td { padding: 10px; border: 1px solid #999; text-align: center; }
        th { background-color: #f2f2f2; }
        a { text-decoration: none; padding: 5px 10px; border-radius: 4px; }
        .edit { background-color: #4CAF50; color: white; }
        .delete { background-color: #f44336; color: white; }
    </style>
</head>
<body>

<h2 style="text-align:center;">Cars List</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Model</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["model"]; ?></td>
        <td><?php echo $row["price"]; ?></td>
        <td>
            <a class="edit" href="edit_car.php?id=<?php echo $row['id']; ?>">Edit</a>
            <a class="delete" href="delete_car.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this car?');">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

<p style="text-align:center;"><a href="dashboard.php">Back to Dashboard</a></p>

</body>
</html>