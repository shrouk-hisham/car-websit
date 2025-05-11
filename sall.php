<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $car_id = $_POST['car_id'];
    $payment_method = $_POST['payment_method'];
    $notes = $_POST['notes'];

    $query = "INSERT INTO orders (name, phone, car_id, payment_method, notes, status)
              VALUES ('$name', '$phone', '$car_id', '$payment_method', '$notes', 'قيد الشحن')";

    if (mysqli_query($conn, $query)) {
        echo "<h3 style='color:green;'>تم الدفع بنجاح! سيتم التواصل معك قريبًا.</h3>";
    } else {
        echo "<h3 style='color:red;'>حدث خطأ أثناء تنفيذ الطلب. حاول مرة أخرى.</h3>";
    }
}
?>