<!DOCTYPE html>
<html lang="en">
<?php 
    include("includes/head.php");
?>
<link rel="stylesheet" href="assets/css/transaction.css" type="text/css">
<body>
    <?php 
        include("includes/navbar.php");
    ?>
 
    <section id="transaction">
        <div class="container">
        <h1><span class="sub-title">Transaction</span></h1>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 col-sm-12">
                <div class="card m-4">
                    <div class="card-body">
                        <h2>Hotel Name</h2>
                        <p>Date</p>
                        <div class="btn-green">
                            <a href="transaction_detail.php">Show More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-sm-12">
                <div class="card m-4">
                    <div class="card-body">
                        <h2>Hotel Name</h2>
                        <p>Date</p>
                        <div class="btn-green">
                            <a href="transaction_detail.php">Show More</a>
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