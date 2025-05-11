<?php
session_start();
include 'config.php';

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}

$result = $conn->query("SELECT * FROM messages");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>View Messages</title>
</head>
<body>

<h2>Customer Messages</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["message"]; ?></td>
    </tr>
    <?php endwhile; ?>
</table>

<p><a href="dashboard.php">Back to Dashboard</a></p>

</body>
</html>