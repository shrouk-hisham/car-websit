



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="car.css?v=<?php echo time(); ?>">
    <!-- <link rel="stylesheet" href="car.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

   
    
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<style>
    
</style>
    
</body>
</head>

<body>


    

<!-- 
   
<div class="video-container" >
     <a href="#"></a><video   autoplay muted loop src="CRW_MY26_WelcomeMatDesktop_TDRHPMarquee1920x796fs5mb_TYCK3033000H_unslated.mp4" ></video> 
<div class="overlay-text">
    <span class="label">Discont</span>
    <span class="amount">20%</span>
    <div class="offffer">
    <span class="offer-r">Offers 20 <p>25</p></span>
     -->
    <!-- <span class="offer">20</span> -->
<!-- <samp class="offer-g">25</samp> -->
</div>
</div>
</div>
    <!---------Bootstrab--------->
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active c-item">
                <div class=""><img src="123.webp" class="d-block w-100 c-img" alt="Slide 1"></div>
                <div class="carousel-caption top-0 mt-4">
                    <p class="mt-5 fs-3 text-uppercase"></p>
                    <h1 class="display-1 fw-bolder text-capitalize"></h1>
                    <!-- <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Book a tour</button> -->
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src="1234.webp" class="d-block w-100 c-img" alt="Slide 2">
                <div class="carousel-caption top-0 mt-4">
                    <p class="text-uppercase fs-3 mt-5"></p>
                    <p class="display-1 fw-bolder text-capitalize"></p>
                    <!---- <button class="btn btn-primary px-4 py-2 fs-5 mt-5" data-bs-toggle="modal"
            data-bs-target="#booking-modal">Book a tour</button>-->
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src="12345.webp" class="d-block w-100 c-img" alt="Slide 3">
                <div class="carousel-caption top-0 mt-4">
                    <p class="text-uppercase fs-3 mt-5"></p>
                    <p class="display-1 fw-bolder text-capitalize"></p>
                    <!--<button class="btn btn-primary px-4 py-2 fs-5 mt-5" data-bs-toggle="modal"
            data-bs-target="#booking-modal">Book a tour</button>-->
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            
        </button>
    </div>
   

  

    <!-- ========== DEALS ========== -->



    <!------------------------products --------------->
    <section class="products section container">
        <div class="tab__btns">
            
            <span class="tab__btn active-tab" data-target="#featured"><i class="fas fa-fire"></i>
            <p>Hot Deals</p>
            </span>
        
            <samp class="tab__btn" data-target="#popular"><i class="fas fa-clock"> </i>
            <p>Limited Time</p>
            </samp>
            <samp class="tab__btn" data-target="#new-added"><i class="fas fa-lock"></i>
            <p>Exclusive</p>
            
            </samp>

        </div>
        <div class="tab__items">
            <div class="tab__item active-tab" content id="featured">
                <div class="products__container grid">
                    


                   
                </div>
            </div>


            <div class="tab__item" content id="popular">
                <div class="products__container grid">
                    
                   
                </div>
            </div>




            <div class="tab__item" content id="new-added">
                <div class="products__container grid">
                    


                   
                </div>
            </div>
        </div>
    </section>
    <!-- ========== DEALS ========== -->
    <section class="deals section">
        <div class="deals__container container grid">




            <div class="deals__item">
                <div class="deals__group">
                    <h3 class="deals__brand">Latest Car Models</h3>
                    <span class="deals__category" style="color: rgb(248, 246, 246);">Limited Stock!</span>
                </div>

                <h4 class="deals__title" style="color: rgb(248, 246, 244);">The All-New Chevrolet Captiva</h4>

                <div class="deals__price flex">
                    <span class="new__price" style="color: rgb(246, 244, 248);">$450.000</span>
                    <div class="ol"> <span class="old__price">$660.000</span></div>
                </div>
                <div class="deals__group">
                    <p class="deals__countdwn-text" style="color: aliceblue;">hurry up! offer end in:</p>
                    <div class="countdown">
                        <div class="countdown__amount">
                            <p class="countdown__period" >02</p>
                            <span class="unit" style="color: aliceblue;">Days</span>
                        </div>
                        <div class="countdown__amount">
                            <p class="countdown__period">22</p>
                            <span class="unit" style="color: aliceblue;">Hours</span>
                        </div>
                        <div class="countdown__amount">
                            <p class="countdown__period">57</p>
                            <span class="unit" style="color: aliceblue;">mins</span>
                        </div>
                        <div class="countdown__amount">
                            <p class="countdown__period">24</p>
                            <span class="unit" style="color: rgb(245, 245, 243);">sec</span>
                        </div>

                    </div>
                </div>


                <div class=" deals__btn">
                    <a href="book.html" class="btn btn--md">Book Test Drive</a>
                </div>
            </div>
            <div class="deals__item">
                <div class="deals__group">
                    <h3 class="deals__brand" >Supercar offers</h3>
                    <span class="deals__category" >Exclusive Offer.</span>
                </div> 

                <h4 class="deals__title">Experience ltalian Excellence</h4>

                <div class="deals__price flex">
                    <span class="new__price">$450.000</span>
                    <div class="ol"> <span class="old__price">$560.000</span></div>
                </div>
                <div class="deals__group">
                    <p class="deals__countdwn-text" >hurry up! offer end in:</p>
                    <div class="countdown">
                        <div class="countdown__amount">
                            <p class="countdown__period">02</p>
                            <span class="unit">Days</span>
                        </div>
                        <div class="countdown__amount">
                            <p class="countdown__period">22</p>
                            <span class="unit">Hours</span>
                        </div>
                        <div class="countdown__amount">
                            <p class="countdown__period">57</p>
                            <span class="unit">mins</span>
                        </div>
                        <div class="countdown__amount">
                            <p class="countdown__period">24</p>
                            <span class="unit">sec</span>
                        </div>

                    </div>
                </div>


                <div class=" deals__btn">
                    <a href="book.html" class="btn btn--md">Book Test Drive</a>
                </div>
            </div>
        </div>
    </section>

    <!--=============showcase==========-->
    <section class="showcase section">
        <div class="showcase__container container grid">
            <!-- <div class="showcase__wrapper">
                <h3 class="section__title">Hot Releases</h3>
                <div class="showcase__item">
                    <a href="detals.html" class="showcase__img-box">
                        <img src="1.png" alt="" class="showcase__img">
                    </a>
                    <div class="showcase__content">
                        <a href="details.html">
                            <h4 class="showcase__title">ltaalian Exotic</h4>
                        </a>
                        <div class="showcase__price flex">
                            <span class="new__price">$450.000</span>
                            <span class="old__price">$545.000</span>
                        </div>

                    </div>

                </div>


                <div class="showcase__item">
                    <a href="sell.html" class="showcase__img-box">
                        <img src="2-2.png" alt="" class="showcase__img">
                    </a>
                    <div class="showcase__content">
                        <a href="sell.html">
                            <h4 class="showcase__title">High-Performance Sedan</h4>
                        </a>
                        <div class="showcase__price flex">
                            <span class="new__price">$40.000</span>
                            <span class="old__price">$45.000</span>
                        </div>

                    </div>

                </div>


                <div class="showcase__item">
                    <a href="sell.html" class="showcase__img-box">
                        <img src="3-3.png" alt="" class="showcase__img">
                    </a>
                    <div class="showcase__content">
                        <a href="sell.html">
                            <h4 class="showcase__title">Hot Hatch Performance</h4>
                        </a>
                        <div class="showcase__price flex">
                            <span class="new__price">$35.000</span>
                            <span class="old__price">$245.8</span>
                        </div>

                    </div>

                </div>


            </div> -->
<div class="showcase__wrapper">
  <h3 class="section__title">Hot Releases</h3>
  <div class="showcase__container container " id="hot-products"></div>
</div>




            <!-- <div class="showcase__wrapper">
                <h3 class="section__title">Deals & outlt</h3>
                <div class="showcase__item">
                    <a href="sell.html" class="showcase__img-box">
                        <img src="5-5.png" alt="" class="showcase__img">
                    </a>
                    <div class="showcase__content">
                        <a href="sell.html">
                            <h4 class="showcase__title">Family SUV Deal</h4>
                        </a>
                        <div class="showcase__price flex">
                            <span class="new__price">$35.000</span>
                            <span class="old__price">$38.000</span>
                        </div>

                    </div>

                </div>


                <div class="showcase__item">
                    <a href="sell.html" class="showcase__img-box">
                        <img src="6.png" alt="" class="showcase__img">
                    </a>
                    <div class="showcase__content">
                        <a href="sell.html">
                            <h4 class="showcase__title">Luxury Sedan Deal</h4>
                        </a>
                        <div class="showcase__price flex">
                            <span class="new__price">$28.000</span>
                            <span class="old__price">$30.000</span>
                        </div>

                    </div>

                </div>


                <div class="showcase__item">
                    <a href="sell.html" class="showcase__img-box">
                        <img src="5.png" alt="" class="showcase__img">
                    </a>
                    <div class="showcase__content">
                        <a href="sell.html">
                            <h4 class="showcase__title">White SUVOffer</h4>
                        </a>
                        <div class="showcase__price flex">
                            <span class="new__price">$25.000</span>
                            <span class="old__price">27.000</span>
                        </div>

                    </div>

                </div>


            </div> -->
                <div class="showcase__wrapper">
  <h3 class="section__title">Deals & outlet</h3>
  <div class="showcase__container container " id="deals-products"></div>
</div>


            <!-- <div class="showcase__wrapper">
                <h3 class="section__title">top Selling</h3>
                <div class="showcase__item">
                    <a href="sell.html" class="showcase__img-box">
                        <img src="4-4.png" alt="" class="showcase__img">
                    </a>
                    <div class="showcase__content">
                        <a href="sell.html">
                            <h4 class="showcase__title">Popular Supercar</h4>
                        </a>
                        <div class="showcase__price flex">
                            <span class="new__price">$460.000</span>
                            <span class="old__price">$545.000</span>
                        </div>

                    </div>

                </div>


                <div class="showcase__item">
                    <a href="sell.html" class="showcase__img-box">
                        <img src="7.png" alt="" class="showcase__img">
                    </a>
                    <div class="showcase__content">
                        <a href="sell.html">
                            <h4 class="showcase__title">Blue Exotic Beauty</h4>
                        </a>
                        <div class="showcase__price flex">
                            <span class="new__price">$380.000</span>
                            <span class="old__price">445.000</span>
                        </div>

                    </div>

                </div>


                <div class="showcase__item">
                    <a href="sell.html" class="showcase__img-box">
                        <img src="3.png" alt="" class="showcase__img">
                    </a>
                    <div class="showcase__content">
                        <a href="sell.html">
                            <h4 class="showcase__title">Luxury Performance Leader</h4>
                        </a>
                        <div class="showcase__price flex">
                            <span class="new__price">$36.000</span>
                            <span class="old__price">$40.000</span>
                        </div>

                    </div>

                </div>




            </div> -->
<div class="showcase__wrapper">
  <h3 class="section__title">Top Selling</h3>
  <div class="showcase__container container " id="top-products"></div>
</div>

            <!-- <div class="showcase__wrapper">
                <h3 class="section__title">Trendy</h3>
                <div class="showcase__item">
                    <a href="detals.html" class="showcase__img-box">
                        <img src="xxx.jpg" alt="" class="showcase__img">
                    </a>
                    <div class="showcase__content">
                        <a href="details.html">
                            <h4 class="showcase__title">florl print casual cotton dress</h4>
                        </a>
                        <div class="showcase__price flex">
                            <span class="new__price">$238.85</span>
                            <span class="old__price">245.8</span>
                        </div>

                    </div>

                </div>


                <div class="showcase__item">
                    <a href="detals.html" class="showcase__img-box">
                        <img src="xxx.jpg" alt="" class="showcase__img">
                    </a>
                    <div class="showcase__content">
                        <a href="details.html">
                            <h4 class="showcase__title">florl print casual cotton dress</h4>
                        </a>
                        <div class="showcase__price flex">
                            <span class="new__price">$238.85</span>
                            <span class="old__price">245.8</span>
                        </div>

                    </div>

                </div>


                <div class="showcase__item">
                    <a href="detals.html" class="showcase__img-box">
                        <img src="xxx.jpg" alt="" class="showcase__img">
                    </a>
                    <div class="showcase__content">
                        <a href="details.html">
                            <h4 class="showcase__title">florl print casual cotton dress</h4>
                        </a>
                        <div class="showcase__price flex">
                            <span class="new__price">$238.85</span>
                            <span class="old__price">245.8</span>
                        </div>

                    </div>

                </div>


            </div> -->
        </div>

    </section>
   
   
<!-- <script src="Fashion&Apparel.js"></script> -->
<script>
function loadCars(tabName) {
    fetch("load_cars.php?tab=" + tabName)
    .then(res => res.text())
    .then(html => {
        const tab = document.querySelector(`#${tabName}`);
        if (tab) {
            const container = tab.querySelector('.products__container.grid');
            if (container) {
                container.innerHTML = html;
            }
        }
    });
}

document.addEventListener("DOMContentLoaded", () => {
    loadCars("featured");
});

const tabs = document.querySelectorAll('[data-target]');
const tabContents = document.querySelectorAll('[content]');

tabs.forEach((tabBtn) => {
    tabBtn.addEventListener('click', () => {
        const target = document.querySelector(tabBtn.dataset.target);
        const tabName = tabBtn.dataset.target.replace("#", "");

        tabContents.forEach((tabContent) => {
            tabContent.classList.remove('active-tab');
        });
        target.classList.add('active-tab');

        tabs.forEach((btn) => {
            btn.classList.remove('active-tab');
        });
        tabBtn.classList.add('active-tab');

        loadCars(tabName);
    });
});


</script>

<script>
function loadShowcase(group) {
    fetch("load_showcase.php?group=" + group)
    .then(res => res.text())
    .then(html => {
        document.getElementById(group + "-products").innerHTML = html;
    });
}

document.addEventListener("DOMContentLoaded", () => {
    loadShowcase("hot");
    loadShowcase("deals");
    loadShowcase("top");
});
</script>
</body>

</html>