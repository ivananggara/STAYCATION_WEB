<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php") ?> 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php include("includes/header.php") ?>

  <?php include("includes/sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-building"></i> Detail Hotel</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="hotel.php">Hotel</a></li>
              <li class="breadcrumb-item active">Detail Hotel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <a href="hotel.php" class="btn btn-sm btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                    <tbody>                      
                    <tr>
                        <td width="20%"><strong>Gambar Hotel<strong></td>
                        <td width="80%"><img src="foto/ivan.jpg" class="img-fluid" width="200px;"></td>
                      </tr>                
                      <tr>
                        <td width="20%"><strong>Nama Hotel<strong></td>
                        <td width="80%">Villa Real</td>
                      </tr>                
                      <tr>
                        <td width="20%"><strong>Bintang<strong></td>
                        <td width="80%">5</td>
                      </tr>                
                      <tr>
                        <td width="20%"><strong>Jarak<strong></td>
                        <td width="80%">5km</td>
                      </tr>                
                      <tr>
                        <td width="20%"><strong>Wisata<strong></td>
                        <td width="80%">Nusa Dua</td>
                      </tr>                
                      <tr>
                        <td width="20%"><strong>Email<strong></td>
                        <td width="80%">villareal@gmail.com</td>
                      </tr>                
                      <tr>
                        <td width="20%"><strong>Kontak<strong></td>
                        <td width="80%">09369048609248</td>
                      </tr>                
                      <tr>
                        <td width="20%"><strong>Fasilitas<strong></td>
                        <td width="80%">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae eveniet, accusamus facere obcaecati quos perspiciatis incidunt dolore aut molestias delectus.</td>
                      </tr> 
                      <tr>
                        <td width="20%"><strong>Deskripsi<strong></td>
                        <td width="80%">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae eveniet, accusamus facere obcaecati quos perspiciatis incidunt dolore aut molestias delectus.</td>
                      </tr> 
                      <tr>
                        <td width="20%"><strong>Interior 1<strong></td>
                        <td width="80%"><img src="foto/ivan.jpg" class="img-fluid" width="200px;"></td>
                      </tr>   
                      <tr>
                        <td width="20%"><strong>Interior 2<strong></td>
                        <td width="80%"><img src="foto/ivan.jpg" class="img-fluid" width="200px;"></td>
                      </tr>   
                      <tr>
                        <td width="20%"><strong>Interior 3<strong></td>
                        <td width="80%"><img src="foto/ivan.jpg" class="img-fluid" width="200px;"></td>
                      </tr>   
                      <tr>
                        <td width="20%"><strong>Interior 4<strong></td>
                        <td width="80%"><img src="foto/ivan.jpg" class="img-fluid" width="200px;"></td>
                      </tr>   
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("includes/footer.php") ?>

</div>
<!-- ./wrapper -->

<?php include("includes/script.php") ?>
</body>
</html>
