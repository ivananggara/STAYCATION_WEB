<!DOCTYPE html>
<html lang="en">
<?php 
    include("includes/head.php");
?>
<link rel="stylesheet" href="assets/css/login.css" type="text/css">
<section>
    <div class="container">
        <div class="kotak m-auto my-5 w-100">
            <div class=" w-100 d-flex flex-row flex-end ">
                <span class="btn-close position-relative end-0"></span>
            </div>
            <div class="row">
                <div class="col-md-6 gambar-login" style="border-radius: 25px 0px 0px 25px;"></div>
                <div class="col-md-6 form-sign">
                    <div class="kotak-sign m-auto ">
                        <h3 class="mb-5" style="font-weight: bold; color:#00AE52; ;">Sign In</h3>
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label" style="font-weight:bold">Email</label>
                                <input type="text" class="form-control input-email" style="padding: 14px; background-color: #F4F4F4;" id="exampleInputEmail1" placeholder="put your email here">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label" style="font-weight:bold">Password</label>
                                <input type="password" class="form-control input-password" style="padding: 14px; background-color: #F4F4F4; margin-bottom: 70px;" id="exampleInputPassword1" placeholder="put your email here">
                            </div>
                            <button type="submit" class="btn mb-3" style="background-color: #00AE52; color: white; width: 100%; padding: 10px; font-weight: bold; border-radius: 14px; box-shadow: 0px 4px 4px rgba(255, 255, 255, 0.25);">Sign In</button>
                            <button class="btn" style="background-color: white; color: #00AE52; width: 100%; border: 1px solid #00AE52; padding: 10px; font-weight: bold; border-radius: 14px;"><a style="text-decoration: none; color:var(--green)" href="register.php">Sign Up</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </section>
    <?php 
        include("includes/script.php");
    ?>
</body>
</html>