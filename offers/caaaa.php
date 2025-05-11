<?php
include 'db.php';

$tab = $_GET['tab']; // القيم هتكون: featured أو popular أو new-added
$sql = "SELECT * FROM cars WHERE tab_name = '$tab'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo '
    <div class="popular__item">
        <div class="product__banner">
            <a href="details.html" class="product__images">
                <img src="'.$row['image_default'].'" class="product__img default">
                <img src="'.$row['image_hover'].'" class="product__img hover">
            </a>
            <div class="popular__actions">
                <a href="#" class="action__btn" aria-label="quick view"><i class="fas fa-eye"></i></a>
                <a href="#" class="action__btn" aria-label="add to wishlist"><i class="fas fa-heart"></i></a>
                <a href="#" class="action__btn" aria-label="Compare"><i class="fas fa-shuffle"></i></a>
            </div>
            <div class="product__badge light-pink">Hot</div>
        </div>
        <div class="product__content">
            <div class="product__rating">
                <i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                <i class="ri-star-line"></i><span>(550)</span>
            </div>
            <h4>'.$row['name'].'</h4>
            <div class="deals_card_grid">
                <div><span><i class="ri-group-line"></i></span> '.$row['passengers'].'</div>
                <div><span><i class="ri-steering-2-line"></i></span> '.$row['drive_type'].'</div>
                <div><span class="ri-time-line"></span> '.$row['speed'].'</div>
                <div><span><i class="ri-car-line"></i></span> '.$row['engine_type'].'</div>
            </div>
            <hr>
            <div class="product__price flex">
                <div class="price">
                    <span class="new__price"><h3>'.$row['new_price'].'</h3></span>
                    <span class="old__price"><p>'.$row['old_price'].'</p></span>
                </div>
                <div class="book">
                    <a href="sell.html">Sell Now <span><i class="ri-arrow-right-line"></i></span></a>
                    <a href="book.html"><span>Book Now</span><span><i class="ri-arrow-right-line"></i></span></a>
                </div>
            </div>
        </div>
    </div>';
}
?>