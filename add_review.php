<?php
// الاتصال بقاعدة البيانات
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["customer_name"];
    $rating = $_POST["rating"];
    $comment = $_POST["comment"];

    $stmt = $conn->prepare("INSERT INTO reviews (customer_name, rating, comment) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $name, $rating, $comment);
    $stmt->execute();

    echo "Review submitted successfully!";
}
?>