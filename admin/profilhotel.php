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
            <h3><i class="fas fa-user-tie"></i> Profil Hotel</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Profil Hotel</li>
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
                  <a href="editprofilhotel.php" class="btn btn-sm btn-info float-right"><i class="fas fa-edit"></i> Edit Profil Hotel</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-sm-12">
                    <div class="alert alert-success" role="alert">Data Berhasil Diubah</div>
                </div>
                <table class="table table-bordered">
                    <tbody>  
                      <tr>
                        <td colspan="2"><i class="fas fa-user-circle"></i> <strong>PROFIL<strong></td>
                      </tr> 
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
