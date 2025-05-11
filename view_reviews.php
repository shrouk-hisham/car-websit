<?php
include 'config.php';

$result = $conn->query("SELECT * FROM reviews ORDER BY created_at DESC");

while($row = $result->fetch_assoc()) {
    echo "<div style='border:1px solid #ccc; padding:10px; margin-bottom:10px'>";
    echo "<strong>" . htmlspecialchars($row['customer_name']) . "</strong><br>";
    echo "Rating: " . str_repeat("★", $row['rating']) . "<br>";
    echo "<p>" . nl2br(htmlspecialchars($row['comment'])) . "</p>";
    echo "<small>Submitted on: " . $row['created_at'] . "</small>";
    echo "</div>";
}
?>