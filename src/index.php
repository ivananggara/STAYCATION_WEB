<?php
 include("../koneksi/koneksi.php");
 session_start();
 if(isset($_GET["include"])){
    $include = $_GET["include"];
    if($include=="konfirmasi-login"){
      include("include/konfirmasilogin.php");
    }else if($include=="konfirmasi-edit-jenis-kamar"){
        include("include/konfirmasieditjeniskamar.php");
    }else if($include=="konfirmasi-tambah-jenis-kamar"){
        include("include/konfirmasitambahjeniskamar.php");
    }else if($include=="konfirmasi-edit-profil"){
        include("include/konfirmasieditprofil.php");
    }else if($include=="sign-out"){
        include("include/signout.php");
    }
  }  
?>
<!DOCTYPE html>
<html lang="en">
<?php
//cek ada get include
if(isset($_GET["include"])){
  	$include = $_GET["include"];
  	//cek apakah ada session id admin
  	if(isset($_SESSION['id_user'])){
    //pemanggilan ke halaman-halaman menu admin
      if($_SESSION['level'] == "konsumen"){?>
      <body>
      <?php include("includes_user/head.php") ?>
            <?php include("includes_user/navbar.php") ?>
            <?php 
            if($include=="home"){
                include("include/home.php");
            }
            ?>
            <?php include("includes_user/footer.php") ?>
            <?php include("includes_user/script.php") ?>
      </body>
      <?php } else { ?>
      <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <?php include("includes/head.php") ?>
            <?php include("includes/header.php") ?>
            <?php include("includes/sidebar.php") ?>
            <div class="content-wrapper">
            <?php 
            if($include=="wisata"){
                include("include/wisata.php");
            }else if($include=="jenis-kamar"){
                include("include/jeniskamar.php");
            }else if($include=="tambah-jenis-kamar"){
                include("include/tambahjeniskamar.php");
            }else if($include=="edit-jenis-kamar"){
                include("include/editjeniskamar.php");
            }else if($include=="edit-profil"){
                include("include/editprofil.php");
            }else{
                include("include/profil.php");
            }  
            ?>
            </div>
            <!-- /.content-wrapper -->
            <?php include("includes/footer.php") ?>
        </div>
        <!-- ./wrapper -->
        <?php include("includes/script.php") ?>
        </body>
        <?php


      }
  	}else{
    //pemanggilan halaman form login
    $include = $_GET["include"];
    if($include=="login"){
        include("include/login.php");
    }else {
        include("include/home.php");
    }
  	}  
}else{
  if(isset($_SESSION['id_user'])){
    if($_SESSION['level'] == "konsumen"){?>
        <?php include("include_user/head.php") ?>
            <?php include("include_user/navbar.php") ?>
            <?php 
                include("include/home.php");
            ?>
            <?php include("include_user/footer.php") ?>
        <?php include("include_user/script.php") ?>
      <?php } else { ?>
      <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <?php include("includes/head.php") ?>
            <?php include("includes/sidebar.php") ?>
            <div class="content-wrapper">
            <?php 
                include("include/profil.php");
            ?>
            </div>
            <!-- /.content-wrapper -->
            <?php include("includes/footer.php") ?>
        </div>
        <!-- ./wrapper -->
        <?php include("includes/script.php") ?>
        </body>
        <?php


      }
  }else{
  //pemanggilan halaman form login
        include("include/home.php");
  } 
}
?>


</body>
</html>