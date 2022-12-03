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
              <li class="breadcrumb-item"><a href="jeniskamar.php">Jenis Kamar</a></li>
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
          <a href="jeniskamar.php" class="btn btn-sm btn-warning float-right">
          <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br></br>
      <div class="col-sm-10">
          <div class="alert alert-danger" role="alert">Maaf data wajib di isi</div>
      </div>
      <form class="form-horizontal">
        <div class="card-body">
        <div class="form-group row">
            <label for="hotel" class="col-sm-3 col-form-label">Nama Hotel</label>
            <div class="col-sm-7">
              <select class="form-control" id="hotel">
                <option value="0">- Pilih Hotel -</option>
                <option value="Website">Website</option>
                <option value="Mobile">Mobile</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="jenis_kamar" class="col-sm-3 col-form-label">Jenis Kamar</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="jenis_kamar" id="jenis_kamar" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="harga" class="col-sm-3 col-form-label">Harga</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="harga" id="harga" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="jumlah_kamar" class="col-sm-3 col-form-label">Jumlah Kamar</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="jumlah_kamar" id="jumlah_kamar" value="">
            </div>
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
