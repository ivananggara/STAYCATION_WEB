<!DOCTYPE html>
<html lang="en">
<?php 
    include("includes/head.php");
?>
<link rel="stylesheet" href="assets/css/detail_hotel.css" type="text/css">

<body>
    <?php 
        include("includes/navbar.php");
    ?>
    <nav aria-label="breadcrumb" id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="detail_destinasi.php">Detail Destinasi</a></li>
                <li class="breadcrumb-item active-item" aria-current="page">Detail Hotels
            </ol>
        </div>
    </nav>
    <section id="hero">
        <div class="container">
            <div class="title text-center">
                <h1>villa real</h1>
                <p><span>bali</span>, <span>denpasar</span></p>
            </div>
            <div class="row h-100" >
                <div class="col-12 col-md-6 col-lg-6 col-sm-12 m-md-4 m-lg-4">
                    <div class="image-big px-lg-4 px-md-4">
                        <img src="assets/img/pict-big.svg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-5 col-sm-12 m-lg-4 m-md-4">
                    <div class="image-sm px-lg-4 px-md-4 d-flex flex-column">
                        <div class="picts-small d-flex flex-row gap-3">
                            <img src="assets/img/pict-small-hotel.svg" alt="">
                            <img src="assets/img/pict-small-hotel.svg" alt="">
                        </div>
                        <div class="picts-small d-flex flex-row mt-md-3 mt-lg-3 gap-3">
                            <img src="assets/img/pict-small-hotel.svg" alt="">
                            <img src="assets/img/pict-small-hotel.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="hotel-desc">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 px-5">
                    <div class="sub-section">
                        <h1>About <span class="sub-title">Place</span></h1>
                        <h5>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta assumenda voluptate placeat maxime aut suscipit perferendis sunt cumque molestiae quaerat.</h5>
                    </div>
                    <div class="sub-section">
                        <h1>About <span class="sub-title">Place</span></h1>
                        <h5>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta assumenda voluptate placeat maxime aut suscipit perferendis sunt cumque molestiae quaerat.</h5>
                    </div>
                    <div class="sub-section">
                        <h1>About <span class="sub-title">Place</span></h1>
                        <h4>villareal@gmail.com</h4>
                        <h6>0842784753</h6>
                    </div>
                </div>
                <div class="col-lg-6 px-5">
                    <div class="card w-100">
                        <div class="card-body">
                            <h1>Start <span class="sub-title">Booking</span></h1>
                            <form>
                                <div class="mb-3 form-profile">
                                    <label for="exampleInputEmail1" class="form-label label-profile">Night</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="123" aria-describedby="emailHelp" placeholder="how long you will stay">
                                </div>
                                <div class="mb-3 form-profile">
                                    <label for="exampleInputEmail1" class="form-label label-profile">Room Type</label>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option selected>select room type</option>
                                        <option value="1">one</option>
                                        <option value="2">two</option>
                                        <option value="3">three</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Continue</button>
                            </form>
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