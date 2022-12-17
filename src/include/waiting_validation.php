<!DOCTYPE html>
<html lang="en">
<?php 
    include("includes_user/head.php");
?>
<link rel="stylesheet" href="assets/css/transaction.css" type="text/css">
<body>
 
    <section id="success">
        <div class="container w-100">
            <div class="row w-100">
                <div class="card w-100 d-flex flex-column justify-content-center align-items-center">
                    <h1>Thank you for booking</h1>
                    <h2>Please waiting for validation to see your transaction</h2>
                    <img src="assets/img/check-list.svg" alt="" width="250px">
                    <a href="home.php">Back to home</a>
                </div>
            </div>
        </div>
    </section>
    <?php 
        include("includes_user/script.php");
    ?>
</body>
</html>