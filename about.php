<!DOCTYPE html>
<html lang="en">
<?php 
    include("includes/head.php");
?>
<link rel="stylesheet" href="assets/css/about.css" type="text/css">
<?php 
    include("includes/navbar.php");
?>
<style>
    footer{
        border-top: 2px solid var(--white);
    }
</style>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="assets/img/about-img.svg" style="width: 95%;" alt="">
                    </div>
                </div>
                <div class="col-lg-7 px-5">
                    <h1>About <span class="about-sub">Us</span></h1>
                    <p>Staycation adalah website yang dibuat untuk mencari tempat destinasi yang cocok untuk berlibur. Tujuan utama dari website ini adalah untuk melakukan pemesanan tiket hotel terdekat dari destinasi wisata yang dipilih oleh konsumen</p>
                    <div class="sosmed d-flex flex-row">
                        <div class="item d-flex align-items-center justify-content-center">
                            <a href=""><img src="assets/img/instagram.png" alt=""></a>
                        </div>
                        <div class="item d-flex align-items-center justify-content-center">
                            <a href=""><img src="assets/img/twit.png" alt=""></a>
                        </div>
                    </div>
                    <div class="goals d-flex flex-row align-items-center justify-content-between px-2">
                        <div class="sub-goals d-flex flex-column justify-content-center align-items-center">
                            <img src="assets/img/user.png" alt="">
                            <h2><span class="sub-title">123</span> users</h2>
                        </div>
                        <div class="sub-goals d-flex flex-column justify-content-center align-items-center">
                            <img src="assets/img/handshake.png" alt="">
                            <h2><span class="sub-title">123</span> partner</h2>
                        </div>
                        <div class="sub-goals d-flex flex-column justify-content-center align-items-center">
                            <img src="assets/img/place.png" alt="">
                            <h2><span class="sub-title">123</span> destination</h2>
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