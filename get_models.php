<?php
// الاتصال بقاعدة البيانات
include 'config.php';

// التحقق من وجود قيمة النوع المرسل عبر GET
if (isset($_GET['brand'])) {
    $brand = $_GET['brand']; // حفظ النوع في متغير

    // استعلام لجلب الموديلات التي تنتمي لهذا النوع فقط
    $stmt = $conn->prepare("SELECT * FROM car_models WHERE brand = ?");
    $stmt->bind_param("s", $brand); // ربط القيمة بالاستعلام
    $stmt->execute();

    // الحصول على النتيجة
    $result = $stmt->get_result();
    $models = [];

    // تخزين النتائج داخل مصفوفة
    while ($row = $result->fetch_assoc()) {
        $models[] = $row;
    }

    // إرسال النتائج بصيغة JSON لاستخدامها في الفرونت
    echo json_encode($models);
}
?>