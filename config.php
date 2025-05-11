<?php
$host = 'localhost';        // السيرفر، غالباً "localhost"
$user = 'root';             // اسم المستخدم، غالباً "root" في XAMPP
$password = '';             // كلمة السر، بتكون فاضية غالباً
$dbname = 'car_project'; // اسم قاعدة البيانات اللي أنشأتها

$conn = new mysqli($host, $user, $password, $dbname);

// التحقق من نجاح الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}
?>