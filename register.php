<!DOCTYPE html>
<html lang="en">
<?php 
    include("includes/head.php");
?>
<link rel="stylesheet" href="assets/css/register.css" type="text/css">
<body>
 
    <section id="register">
        <div class="row">
            <div class="col-lg-6">
                <img src="assets/img/register-pict.svg" alt="">
            </div>
            <div class="col-lg-6">
                <div class="form-register d-flex flex-column">
                    <h1>New Account</h1>
                    <p>Please fill up the blank</p>
                    <form>
                        <div class="mb-3 form-profile">
                            <label for="exampleInputEmail1" class="form-label label-profile">Name</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp"  placeholder="please input your name here">
                        </div>
                        <div class="mb-3 form-profile">
                            <label for="exampleInputEmail1" class="form-label label-profile">Username</label>
                            <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" placeholder="please input your username here">
                        </div>
                        <div class="mb-3 form-profile">
                            <label for="exampleInputEmail1" class="form-label label-profile">Email</label>
                            <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="please input your email here">
                        </div>
                        <div class="mb-3 form-profile">
                            <label for="exampleInputEmail1" class="form-label label-profile">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="please input your password here"aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary">Continue</button>
                        </form>
                </div>
            </div>
            </div>
        </section>
    <?php 
        include("includes/script.php");
    ?>
</body>
</html>