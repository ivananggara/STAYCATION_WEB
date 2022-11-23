<!DOCTYPE html>
<html lang="en">
<?php 
    include("includes/head.php");
?>
<link rel="stylesheet" href="assets/css/profile.css" type="text/css">
<body>
    <?php 
        include("includes/navbar.php");
    ?>
 
    <section id="my-profile">
        <div class="container">
        <h1>My <span class="sub-title">Profile</span></h1>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 col-sm-12">
                <div class="card m-4">
                    <div class="card-body">
                        <h2>Profile Setting</h2>
                        <p>You can edit your profile here</p>
                        <div class="btn-green">
                            <a href="edit_profile.php">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-sm-12">
                <div class="card m-4">
                    <div class="card-body">
                        <h2>Transaction</h2>
                        <p>You can see your trasaction here</p>
                        <div class="btn-green">
                            <a href="">See Transaction</a>
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