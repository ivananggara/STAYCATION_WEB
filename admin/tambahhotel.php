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
            <h3><i class="fas fa-plus"></i> Tambah Hotel</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="hotel.php">Hotel</a></li>
              <li class="breadcrumb-item active">Tambah Hotel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Hotel</h3>
        <div class="card-tools">
          <a href="hotel.php" class="btn btn-sm btn-warning float-right">
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
            <label for="gambar_hotel" class="col-sm-3 col-form-label">Gambar Hotel </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar_hotel" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="hotel" class="col-sm-3 col-form-label">Nama Hotel</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="hotel" id="hotel" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="id_user" class="col-sm-3 col-form-label">ID User</label>
            <div class="col-sm-7">
              <select class="form-control" id="id_user">
                <option value="0">- Pilih ID User -</option>
                <option value="Website">Website</option>
                <option value="Mobile">Mobile</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="wisata" class="col-sm-3 col-form-label">Wisata</label>
            <div class="col-sm-7">
              <select class="form-control" id="wisata">
                <option value="0">- Pilih Wisata -</option>
                <option value="Website">Website</option>
                <option value="Mobile">Mobile</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="bintang_hotel" class="col-sm-3 col-form-label">Bintang</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="bintang_hotel" id="bintang_hotel" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="jarak" class="col-sm-3 col-form-label">Jarak</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="jarak" id="jarak" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">Email Hotel</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="email" id="email" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="kontak" class="col-sm-3 col-form-label">Kontak Hotel</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="kontak" id="kontak" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="fasilitas" class="col-sm-3 col-form-label">Fasilitas</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="fasilitas" id="editor1" rows="12">Lorem Ipsum</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="deskripsi_hotel" class="col-sm-3 col-form-label">Deksripsi Hotel</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="deskripsi_hotel" id="editor1" rows="12">Lorem Ipsum</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar_interior1" class="col-sm-3 col-form-label">Gambar Interior 1 </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar_interior1" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar_interior2" class="col-sm-3 col-form-label">Gambar Interior 2 </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar_interior2" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar_interior3" class="col-sm-3 col-form-label">Gambar Interior 3 </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar_interior3" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar_interior4" class="col-sm-3 col-form-label">Gambar Interior 4 </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar_interior4" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
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
