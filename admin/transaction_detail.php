<!DOCTYPE html>
<html lang="en">
<?php 
    include("includes_user/head.php");
?>
<link rel="stylesheet" href="assets/css/transaction.css" type="text/css">
<body>
    <?php 
        include("includes_user/navbar.php");
    ?>
    <section id="transaction-detail">
        <div class="container w-100">
        <h1><span class="sub-title">Transaction </span>Detail</h1>
            <div class="row">
                <div class="col-12 col-md-6 col-sm-12 col-lg-6">
                <form>
                    <div class="mb-3 form-profile">
                        <label for="exampleInputEmail1" class="form-label label-profile">Name</label>
                        <h6>Ivan Wahyu Anggara</h6>
                    </div>
                    <div class="mb-3 form-profile">
                        <label for="exampleInputEmail1" class="form-label label-profile">Email</label>
                        <h6>ivanwanggara@gmail.com</h6>
                    </div>
                    <div class="mb-3 form-profile">
                        <label for="exampleInputEmail1" class="form-label label-profile">Hotel name</label>
                        <h6>Hotel name</h6>
                    </div>
                    <div class="mb-3 form-profile">
                        <label for="exampleInputEmail1" class="form-label label-profile">Room Type</label>
                        <h6>President suite</h6>
                    </div>
                    <div class="mb-3 form-profile">
                        <label for="exampleInputEmail1" class="form-label label-profile">Check In</label>
                        <h6>Date</h6>
                    </div>
                    <div class="mb-3 form-profile">
                        <label for="exampleInputEmail1" class="form-label label-profile">Check out</label>
                        <h6>Date</h6>
                    </div>
                    </form>
                </div>
                <div class="col-12 col-md-6 col-sm-12 col-lg-6 d-flex flex-row justify-content-center">
                    <div class="img-edit px-5">
                        <img src="assets/img/customer-pict.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
        include("includes_user/footer.php");
        include("includes_user/script.php");
    ?>
</body>
</html>