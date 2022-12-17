<?php
    session_start();
    include("../koneksi/koneksi.php");
    $id_user = $_SESSION['id_user'];
    $sql_u = "SELECT `nama`, `username`, `email`, `pekerjaan`, `foto_profil` FROM `user` WHERE `id_user`='$id_user'";
    $query_u = mysqli_query($koneksi, $sql_u);
    while($data_u = mysqli_fetch_row($query_u)){
        $nama = $data_u[0];
        $username = $data_u[1];
        $email = $data_u[2];
        $pekerjaan = $data_u[3];
        $foto_profil = $data_u[4];
    }
?>
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
                        <img src="assets/img/<?php echo $foto_profil; ?>" alt="">
                    </div>
                </div>

                <div class="col-12 col-md-6 col-sm-12 col-lg-6">
                <?php if ((!empty($_GET['notif'])) && (!empty($_GET['jenis']))) { ?>
                <?php if ($_GET['notif'] == "editkosong") { ?>
                <div class="alert alert-danger" role="alert">Maaf data
                    <?php echo $_GET['jenis']; ?> wajib di isi</div>
                <?php } ?>
                <?php } ?>
                <?php if(!empty($_GET['notif'])){?>
                    <?php if($_GET['notif']=="editberhasil"){?>
                          <div class="alert alert-success" role="alert">
                          Profil Berhasil Diedit</div>
                    <?php } ?>
                    <?php }?>
                <form action="konfirmasieditprofileuser.php" method="post" enctype="multipart/form">
                    <div class="mb-3 form-profile">
                        <label for="exampleInputEmail1" class="form-label label-profile">Avatar</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="foto_profil">
                    </div>
                    <div class="mb-3 form-profile">
                        <label for="exampleInputEmail1" class="form-label label-profile">Name</label>
                        <h6><?php echo $nama; ?></h6>
                    </div>
                    <div class="mb-3 form-profile">
                        <label for="exampleInputEmail1" class="form-label label-profile">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $username; ?>" aria-describedby="emailHelp" name="username">
                    </div>
                    <div class="mb-3 form-profile">
                        <label for="exampleInputEmail1" class="form-label label-profile">Email address</label>
                        <h6><?php echo $email; ?></h6>
                    </div>
                    <div class="mb-3 form-profile">
                        <label for="exampleInputEmail1" class="form-label label-profile">Occupation</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $pekerjaan; ?>" aria-describedby="emailHelp" name="pekerjaan">
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