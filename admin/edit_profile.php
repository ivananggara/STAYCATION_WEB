<!DOCTYPE html>
<html lang="en">
<?php 
    include("includes_user/head.php");
?>
<link rel="stylesheet" href="assets/css/profile.css" type="text/css">
<body>
    <?php 
        include("includes_user/navbar.php");
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
                    <div class="mb-3 form-profile">
                        <label for="exampleInputEmail1" class="form-label label-profile">Avatar</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 form-profile">
                        <label for="exampleInputEmail1" class="form-label label-profile">Name</label>
                        <h6>Ivan Wahyu Anggara</h6>
                    </div>
                    <div class="mb-3 form-profile">
                        <label for="exampleInputEmail1" class="form-label label-profile">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" value="ivan123" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 form-profile">
                        <label for="exampleInputEmail1" class="form-label label-profile">Email address</label>
                        <h6>ivanwanggara30@gmail.com</h6>
                    </div>
                    <div class="mb-3 form-profile">
                        <label for="exampleInputEmail1" class="form-label label-profile">Occupation</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" value="Software Engineer" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Edit</button>
                    </form>
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