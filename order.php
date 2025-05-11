<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST["customer_name"];
    $car_id = $_POST["car_id"];
    $status = "Pending"; // الحالة الافتراضية للطلب

    $stmt = $conn->prepare("INSERT INTO orders (customer_name, car_id, status) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $customer_name, $car_id, $status);
    $stmt->execute();

    echo "Order placed successfully!";
}
?>