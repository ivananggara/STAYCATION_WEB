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
            <h1>Result, <span class="sub-title">Malang</span></h1>
            <div class="row">
                <div class="col-12 m-auto">
                    <div class="owl-carousel owl-one owl-theme">
                        <div class="item">
                            <div class="card">
                                <img src="assets/img/card-hotel.svg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h4>Destination name</h4>
                                        <div class="text">
                                            <h2>Bali, <span>Denpasar</span></h2>
                                            <div class="rate">
                                                <img src="" alt="">
                                                <h6>4.8</h6>
                                            </div>
                                        </div>
                                        <a href="detail_destinasi.php">Click here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card ">
                                <img src="assets/img/card-hotel.svg" alt="" class="card-img-top">
                                <div class="card-body">
                                <div class="card-title">
                                        <h4>Destination name</h4>
                                        <div class="text">
                                            <h2>Bali, <span>Denpasar</span></h2>
                                            <div class="rate">
                                                <img src="" alt="">
                                                <h6>4.8</h6>
                                            </div>
                                        </div>
                                        <a href="detail_destinasi.php">Click here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card ">
                                <img src="assets/img/card-hotel.svg" alt="" class="card-img-top">
                                <div class="card-body">
                                <div class="card-title">
                                        <h4>Destination name</h4>
                                        <div class="text">
                                            <h2>Bali, <span>Denpasar</span></h2>
                                            <div class="rate">
                                                <img src="" alt="">
                                                <h6>4.8</h6>
                                            </div>
                                        </div>
                                        <a href="detail_destinasi.php">Click here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card ">
                                <img src="assets/img/card-hotel.svg" alt="" class="card-img-top">
                                <div class="card-body">
                                <div class="card-title">
                                        <h4>Destination name</h4>
                                        <div class="text">
                                            <h2>Bali, <span>Denpasar</span></h2>
                                            <div class="rate">
                                                <img src="" alt="">
                                                <h6>4.8</h6>
                                            </div>
                                        </div>
                                        <a href="detail_destinasi.php">Click here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card border-0 shadow">
                                <img src="assets/img/card-hotel.svg" alt="" class="card-img-top">
                                <div class="card-body">
                                <div class="card-title">
                                        <h4>Destination name</h4>
                                        <div class="text">
                                            <h2>Bali, <span>Denpasar</span></h2>
                                            <div class="rate">
                                                <img src="" alt="">
                                                <h6>4.8</h6>
                                            </div>
                                        </div>
                                        <a href="detail_destinasi.php">Click here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card border-0 shadow">
                                <img src="assets/img/card-hotel.svg" alt="" class="card-img-top">
                                <div class="card-body">
                                <div class="card-title">
                                        <h4>Destination name</h4>
                                        <div class="text">
                                            <h2>Bali, <span>Denpasar</span></h2>
                                            <div class="rate">
                                                <img src="" alt="">
                                                <h6>4.8</h6>
                                            </div>
                                        </div>
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