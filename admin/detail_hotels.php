<?php
 session_start();
 include("../koneksi/koneksi.php");
    $id_wisata = $_GET['data'];
    $id_hotel = $_GET['hotel'];
    $sql_h = "SELECT `hotel`, `bintang_hotel`, `jarak`, `fasilitas`, `deskripsi_hotel`, `email_hotel`, `kontak_hotel`, `gambar_hotel`, `gambar_interior1`, `gambar_interior2`, `gambar_interior3`, `gambar_interior4` FROM `hotel` WHERE `id_hotel` ='$id_hotel'";
    $query_h = mysqli_query($koneksi, $sql_h);
    while($data_h = mysqli_fetch_row($query_h)){
        $hotel = $data_h[0];
        $bintang_hotel = $data_h[1];
        $jarak = $data_h[2];
        $fasilitas = $data_h[3];
        $deskripsi_hotel = $data_h[4];
        $email_hotel = $data_h[5];
        $kontak_hotel = $data_h[6];
        $gambar_hotel = $data_h[7];
        $gambar_interior1 = $data_h[8];
        $gambar_interior2 = $data_h[9];
        $gambar_interior3 = $data_h[10];
        $gambar_interior4 = $data_h[11];
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php 
    include("includes_user/head.php");
?>
<link rel="stylesheet" href="assets/css/detail_hotel.css" type="text/css">

<body>
    <?php 
        include("includes_user/navbar.php");
    ?>
    <nav aria-label="breadcrumb" id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item"><a href="detail_destinasi.php?data=<?php echo $id_wisata; ?>">Detail Destinasi</a></li>
                <li class="breadcrumb-item active-item" aria-current="page">Detail Hotels
            </ol>
        </div>
    </nav>
    <section id="hero">
        <div class="container">
            <div class="title text-center">
                <h1><?php echo $hotel; ?></h1>
            </div>
            <div class="row h-100" >
                <div class="col-12 col-md-6 col-lg-6 col-sm-12 m-md-4 m-lg-4">
                    <div class="image-big px-lg-4 px-md-4">
                        <img src="assets/img/<?php echo $gambar_hotel; ?>" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-5 col-sm-12 m-lg-4 m-md-4">
                    <div class="image-sm px-lg-4 px-md-4 d-flex flex-column">
                        <div class="picts-small d-flex flex-row gap-4">
                            <img src="assets/img/<?php echo $gambar_interior1; ?>" alt="">
                            <img src="assets/img/<?php echo $gambar_interior2; ?>" alt="">
                        </div>
                        <div class="picts-small d-flex flex-row mt-md-5 mt-lg-5 gap-4">
                            <img src="assets/img/<?php echo $gambar_interior3; ?>" alt="">
                            <img src="assets/img/<?php echo $gambar_interior4; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="hotel-desc">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 px-5">
                    <div class="sub-section">
                        <h1>About <span class="sub-title">Place</span></h1>
                        <h5><?php echo $deskripsi_hotel; ?></h5>
                    </div>
                    <div class="sub-section">
                        <h1>Facilities <span class="sub-title"></span></h1>
                        <h5><?php echo $fasilitas; ?></h5>
                    </div>
                    <div class="sub-section">
                        <h1>Contact <span class="sub-title"></span></h1>
                        <h4><?php echo $email_hotel; ?></h4>
                        <h6><?php echo $kontak_hotel; ?></h6>
                    </div>
                </div>
                <div class="col-lg-6 px-5">
                    <div class="card w-100">
                        <div class="card-body">
                            <h1>Start <span class="sub-title">Booking</span></h1>
                            <form>
                                <div class="mb-3 form-profile">
                                    <label for="exampleInputEmail1" class="form-label label-profile">Night</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="123" aria-describedby="emailHelp" placeholder="how long you will stay">
                                </div>
                                <div class="mb-3 form-profile">
                                    <label for="exampleInputEmail1" class="form-label label-profile">Room Type</label>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option selected>select room type</option>
                                        <option value="1">one</option>
                                        <option value="2">two</option>
                                        <option value="3">three</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Continue</button>
                            </form>
                        </div>
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