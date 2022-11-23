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
    <section id="edit-profile">
        <div class="container w-100">
        <h1><span class="sub-title">Edit </span>Profile</h1>
            <div class="row">
                <div class="col-12 col-md-6 col-sm-12 col-lg-6">
                    <div class="img-edit px-5">
                        <img src="assets/img/customer-pict.svg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-sm-12 col-lg-6">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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