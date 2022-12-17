<?php
include("../koneksi/koneksi.php");
session_start();
if (isset($_GET['data'])) {
 $id_user             = $_GET['data'];
 $_SESSION['id_user'] = $id_user;
 $sql_user            = "SELECT `nama`,`email`,`username`,`password`, `pekerjaan`, `kontak`, `level`,`foto_profil`
  FROM `user` WHERE `id_user` = $id_user";
 $query_user = mysqli_query($koneksi, $sql_user);
 while ($data_user = mysqli_fetch_row($query_user)) {
  $nama     = $data_user[0];
  $email    = $data_user[1];
  $username = $data_user[2];
  $password = $data_user[3];
  $pekerjaan = $data_user[4];
  $kontak   = $data_user[5];
  $level = $data_user[6];
  $foto = $data_user[7];
 }
}
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
        <h3><i class="fas fa-edit"></i> Edit Data User</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?include=user">Data User</a></li>
          <li class="breadcrumb-item active">Edit Data User</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title" style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data User</h3>
      <div class="card-tools">
        <a href="pengaturanuser.php" class="btn btn-sm btn-warning float-right"><i
            class="fas fa-arrow-alt-circle-left"></i>
          Kembali</a>
      </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    </br>
    <div class="col-sm-10">
      <?php if ((!empty($_GET['notif'])) && (!empty($_GET['jenis']))) { ?>
      <?php if ($_GET['notif'] == "editkosong") { ?>
      <div class="alert alert-danger" role="alert">Maaf data
        <?php echo $_GET['jenis']; ?> wajib di isi</div>
      <?php } ?>
      <?php } ?>
    </div>
    <form class="form-horizontal" action="konfirmasiedituser.php" method="POST"
      enctype="multipart/form-data">
      <div class="card-body">
        <div class="form-group row">
          <label for="foto" class="col-sm-12 col-form-label"><span class="text-info"><i class="fas fa-user-circle"></i>
              <u>Data User</u></span></label>
        </div>

        <div class="form-group row">
          <label for="foto_profil" class="col-sm-3 col-form-label">Foto Profil</label>
          <div class="col-sm-7">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="foto_profil" id="customFile" value="">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="nama" class="col-sm-3 col-form-label">Nama</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-3 col-form-label">Email</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="email" id="email" value="<?php echo $email ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="username" class="col-sm-3 col-form-label">Username</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="username" id="username" value="<?php echo $username ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="password" class="col-sm-3 col-form-label">Password</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="password" id="password" value="">
            <span class="text-danger" style="font-weight:lighter;font-size:12px">
              *Jangan diisi jika tidak ingin mengubah password</span>
          </div>
        </div>
        <div class="form-group row">
          <label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="<?php echo $pekerjaan ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="kontak" class="col-sm-3 col-form-label">Kontak</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="kontak" id="kontak" value="<?php echo $kontak ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="level" class="col-sm-3 col-form-label">Level</label>
          <div class="col-sm-7">
            <select class="form-control" name="level" id="jurusan">
              <option value="<?php echo $level ?>"><?php echo $level ?></option>
              <option value="superadmin">superadmin</option>
              <option value="admin">admin</option>
              <option value="konsumen">konsumen</option>
            </select>
          </div>
        </div>

      </div>
  </div>

  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
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


