<?php
 include("../koneksi/koneksi.php");
 session_start();
?>

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
            <h3><i class="fas fa-plus"></i> Tambah Jenis Kamar</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="pengaturanuser.php">Jenis Kamar</a></li>
              <li class="breadcrumb-item active">Tambah Jenis Kamar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Jenis Kamar</h3>
        <div class="card-tools">
          <a href="pengaturanuser.php" class="btn btn-sm btn-warning float-right">
          <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br></br>
      <div class="col-sm-10">
          <div class="alert alert-danger" role="alert">Maaf data wajib di isi</div>
      </div>
      <form class="form-horizontal" method="post" action="konfirmasitambahuser.php" enctype="multipart/form-data">
      <div class="card-body">
        <div class="form-group row">
          <label for="foto_profil" class="col-sm-12 col-form-label"><span class="text-info"><i class="fas fa-user-circle"></i>
              <u>Data User</u></span></label>
        </div>
        <div class="form-group row">
          <label for="foto_profil" class="col-sm-3 col-form-label">Foto Profil</label>
          <div class="col-sm-7">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="foto_profil" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="nama" class="col-sm-3 col-form-label">Nama</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="nama" id="nama" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-3 col-form-label">Email</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="email" id="email" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="username" class="col-sm-3 col-form-label">Username</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="username" id="username" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="password" class="col-sm-3 col-form-label">Password</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="password" id="password" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="kontak" class="col-sm-3 col-form-label">Kontak</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="kontak" id="kontak" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="level" class="col-sm-3 col-form-label">Level</label>
          <div class="col-sm-7">
            <select class="form-control" name="level" id="jurusan">
              <option value="Superadmin">superadmin</option>
              <option value="admin">admin</option>
              <option value="konsumen">konsumen</option>
            </select>
          </div>
        </div>
        </div>
      </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
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
