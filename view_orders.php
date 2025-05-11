<?php
session_start();
include 'config.php';

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}

$result = $conn->query("SELECT * FROM orders");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>View Orders</title>
</head>
<body>

<h2>Orders List</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Customer Name</th>
        <th>Car ID</th>
        <th>Status</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["customer_name"]; ?></td>
        <td><?php echo $row["car_id"]; ?></td>
        <td><?php echo $row["status"]; ?></td>
    </tr>
    <?php endwhile; ?>
</table>

<p><a href="dashboard.php">Back to Dashboard</a></p>

</body>
</html>