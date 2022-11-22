<!DOCTYPE html>
<html lang="en">
<?php 
    include("includes/head.php");
?>
<link rel="stylesheet" href="assets/css/detail_destinasi.css" type="text/css">
<body>
    <?php 
        include("includes/navbar.php");
    ?>
    <nav aria-label="breadcrumb" id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active-item" aria-current="page">Detail Destinasi</li>
            </ol>
        </div>
    </nav>
    <section id="hero">
        <div class="container">
            <div class="title text-center">
                <h1>Nusa Dua</h1>
                <p>Bali, Denpasar</p>
            </div>
            <div class="row h-100" >
                <div class="col-12 col-md-6 col-lg-6 col-sm-12 m-md-4 m-lg-4">
                    <div class="image-big px-lg-4 px-md-4">
                        <img src="assets/img/pict-big.svg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-5 col-sm-12 m-lg-4 m-md-4">
                    <div class="image-sm px-lg-4 px-md-4 d-flex flex-column">
                        <img src="assets/img/pict-small.svg" alt="">
                        <img class="mt-md-3 mt-lg-3" src="assets/img/pict-small1.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="destination-desc">
        <div class="container">
            <h1>About <span class="sub-title">Place</span></h1>
            <div class="detail-desc mx-auto">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
        </div>
    </section>
    <section id="nearest-hotels">
        <div class="container">
            <h1>Nearest <span class="sub-title">Hotels</span></h1>
            <div class="row">
                <div class="col-12 m-auto">
                    <div class="owl-carousel owl-des owl-theme">
                        <div class="item">
                            <div class="card">
                                <img src="assets/img/card-hotel.svg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <h4>Owl Carousel</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card ">
                                <img src="assets/img/card-hotel.svg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <h4>Owl Carousel</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card ">
                                <img src="assets/img/card-hotel.svg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <h4>Owl Carousel</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card ">
                                <img src="assets/img/card-hotel.svg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <h4>Owl Carousel</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card border-0 shadow">
                                <img src="assets/img/card-hotel.svg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <h4>Owl Carousel</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card border-0 shadow">
                                <img src="assets/img/card-hotel.svg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <h4>Owl Carousel</h4>
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
</body>
</html>