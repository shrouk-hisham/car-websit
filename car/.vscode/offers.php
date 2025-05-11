<?php
include 'db.php';

$sql = "SELECT * FROM offers";
$result = $conn->query($sql);

echo '<div style="display: flex; flex-wrap: wrap;">';

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div style="border:1px solid #ccc; padding:10px; margin:10px; width:250px;">';
        echo '<img src="images/' . $row["image"] . '" style="width:100%; height:150px; object-fit:cover;">';
        echo '<h3>' . $row["title"] . '</h3>';
        echo '<p>' . $row["description"] . '</p>';
        echo '<strong>' . $row["price"] . ' جنيه</strong>';
        echo '</div>';
    }
} else {
    echo "لا توجد بيانات حالياً.";
}

echo '</div>';
$conn->close();
?>