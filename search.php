<!DOCTYPE html>
<html lang="en">
<?php 
    include("includes/head.php");
?>
<link rel="stylesheet" href="assets/css/home.css" type="text/css">
<body>
    <?php 
        include("includes/navbar.php");
    ?>
    <section id="card-destination">
        <div class="container">
            <h1 class="search-title">Result, <span class="sub-title">Malang</span></h1>
            <div class="row">
                <div class="col-12 m-auto">
                <div class="owl-carousel owl-one owl-theme">
                        <div class="item">
                            <div class="card">
                                <img src="assets/img/card-hotel.svg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h4>nusa dua</h4>
                                    <div class="text d-flex flex-row justify-content-between align-items-center w-100">
                                        <h2>bali, <span>denpasar</span></h2>
                                        <div class="rate ">
                                            <img src="" alt="">
                                            <h6>4.8</h6>
                                        </div>
                                    </div>
                                    <div class="btn-destination w-100 text-center">
                                        <a href="detail_destinasi.php">Click here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img src="assets/img/card-hotel.svg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h4>nusa dua</h4>
                                    <div class="text d-flex flex-row justify-content-between align-items-center w-100">
                                        <h2>bali, <span>denpasar</span></h2>
                                        <div class="rate ">
                                            <img src="" alt="">
                                            <h6>4.8</h6>
                                        </div>
                                    </div>
                                    <div class="btn-destination w-100 text-center">
                                        <a href="detail_destinasi.php">Click here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img src="assets/img/card-hotel.svg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h4>nusa dua</h4>
                                    <div class="text d-flex flex-row justify-content-between align-items-center w-100">
                                        <h2>bali, <span>denpasar</span></h2>
                                        <div class="rate ">
                                            <img src="" alt="">
                                            <h6>4.8</h6>
                                        </div>
                                    </div>
                                    <div class="btn-destination w-100 text-center">
                                        <a href="detail_destinasi.php">Click here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img src="assets/img/card-hotel.svg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h4>nusa dua</h4>
                                    <div class="text d-flex flex-row justify-content-between align-items-center w-100">
                                        <h2>bali, <span>denpasar</span></h2>
                                        <div class="rate ">
                                            <img src="" alt="">
                                            <h6>4.8</h6>
                                        </div>
                                    </div>
                                    <div class="btn-destination w-100 text-center">
                                        <a href="detail_destinasi.php">Click here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img src="assets/img/card-hotel.svg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h4>nusa dua</h4>
                                    <div class="text d-flex flex-row justify-content-between align-items-center w-100">
                                        <h2>bali, <span>denpasar</span></h2>
                                        <div class="rate ">
                                            <img src="" alt="">
                                            <h6>4.8</h6>
                                        </div>
                                    </div>
                                    <div class="btn-destination w-100 text-center">
                                        <a href="detail_destinasi.php">Click here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img src="assets/img/card-hotel.svg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h4>nusa dua</h4>
                                    <div class="text d-flex flex-row justify-content-between align-items-center w-100">
                                        <h2>bali, <span>denpasar</span></h2>
                                        <div class="rate ">
                                            <img src="" alt="">
                                            <h6>4.8</h6>
                                        </div>
                                    </div>
                                    <div class="btn-destination w-100 text-center">
                                        <a href="detail_destinasi.php">Click here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img src="assets/img/card-hotel.svg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h4>nusa dua</h4>
                                    <div class="text d-flex flex-row justify-content-between align-items-center w-100">
                                        <h2>bali, <span>denpasar</span></h2>
                                        <div class="rate ">
                                            <img src="" alt="">
                                            <h6>4.8</h6>
                                        </div>
                                    </div>
                                    <div class="btn-destination w-100 text-center">
                                        <a href="detail_destinasi.php">Click here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <?php 
        include("includes/footer.php");
        include("includes/script.php");
    ?>
    <script>
        $('.owl-one').owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
</body>
</html>