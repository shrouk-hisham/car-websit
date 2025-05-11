<?php
include 'db.php';

if (!isset($_GET['group'])) {
    echo "No group selected!";
    exit;
}

$group = $_GET['group'];
$sql = "SELECT * FROM showcase WHERE group_name = '$group'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo '
    <div class="showcase__item">
        <a href="sell.html" class="showcase__img-box">
            <img src="images/'.$row['image'].'" alt="" class="showcase__img">
        </a>
        <div class="showcase__content">
            <a href="sell.html">
                <h4 class="showcase__title">'.$row['name'].'</h4>
            </a>
            <div class="showcase__price flex">
                <span class="new__price">'.$row['new_price'].'</span>
                <span class="old__price">'.$row['old_price'].'</span>
            </div>
        </div>
    </div>';
}
?>