<!DOCTYPE html>
<html lang="en">
<?php 
    include("includes/head.php");
?>
<link rel="stylesheet" href="assets/css/booking.css" type="text/css">
<script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<body>
    <?php 
        include("includes/navbar.php");
    ?>
    <section id="booking-information">
        <div class="container w-100">
        <h1><span class="sub-title">Booking </span>Information</h1>
        <p>Please fill up the black</p>
            <div class="row">
                <div class="col-12 col-md-6 col-sm-12 col-lg-6">
                    <div class="img-book">
                        <img src="assets/img/pict-big.svg" alt="">
                    </div>
                    <h2>villa real</h2>
                    <h3>Total : Rp. <span class="total">6000000</span> for <span class="total">2</span> night</h3>
                    <div class="img-bank">
                        <img src="assets/img/payment.svg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-sm-12 col-lg-6 px-5">
                <form>
                    <div class="mb-3 form-book">
                        <label for="exampleInputEmail1" class="form-label label-book">Check In Date</label>
                        <input type="text" class="form-control" id="check-in" placeholder="how long you will stay" name="check-in">
                    </div>
                    <div class="mb-3 form-book">
                        <label for="exampleInputEmail1" class="form-label label-book">Check Out Date</label>
                        <input type="text" class="form-control" id="check-out" placeholder="how long you will stay" name="check-out">
                    </div>
                    <div class="mb-3 form-book">
                        <label for="exampleInputEmail1" class="form-label label-book">Transfer Receipt</label>
                        <input type="file" class="form-control" name="receipt">
                    </div>
                    <div class="mb-3 form-book">
                        <label for="exampleInputEmail1" class="form-label label-book">Sender Name</label>
                        <input type="text" class="form-control" name="sender" >
                    </div>
                    <button type="submit" class="btn btn-primary">Continue</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php 
        include("includes/footer.php");
        include("includes/script.php");
    ?>
    <script>
    $('#check-in').datepicker();
    $('#check-out').datepicker();
    </script>
</body>
</html>