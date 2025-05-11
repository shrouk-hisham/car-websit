<?php
session_start();
include 'config.php'; // الاتصال بقاعدة البيانات

// بيانات تسجيل الدخول الافتراضية (ممكن تتحول لاحقًا لقاعدة البيانات)
$admin_email = "admin@site.com";
$admin_password = "admin123";

// رسالة خطأ في حالة الفشل
$error = "";

// التحقق إذا تم إرسال الفورم
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // التحقق من صحة البيانات
    if ($email === $admin_email && $password === $admin_password) {
        $_SESSION["admin"] = true;
        header("Location: dashboard.php"); // تحويل للوحة التحكم بعد الدخول
        exit();
    } else {
        $error = "Invalid email or password.";
    }
}
?>

<!-- نموذج تسجيل الدخول -->
<form method="post" action="">
    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>
</form>

<!-- عرض رسالة الخطأ -->
<?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>