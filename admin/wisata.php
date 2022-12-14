<?php
session_start();
include('../koneksi/koneksi.php');

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
            <h3><i class="fas fa-map"></i> Wisata</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Wisata</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar  Wisata</h3>
                <div class="card-tools">
                  <a href="tambahwisata.php" class="btn btn-sm btn-info float-right">
                  <i class="fas fa-plus"></i> Tambah  Wisata</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="get" action="wisata.php">
                    <div class="row">
                        <div class="col-md-4 bottom-10">
                          <input type="text" class="form-control" id="kata_kunci" name="katakunci">
                        </div>
                        <div class="col-md-5 bottom-10">
                          <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>&nbsp; Search</button>
                        </div>
                    </div><!-- .row -->
                  </form>
                </div><br>
                <div class="col-sm-12">
                    <?php if(!empty($_GET['notif'])){?>
                        <?php if($_GET['notif']=="tambahberhasil"){?>
                          <div class="alert alert-success" role="alert">
                          Data Berhasil Ditambahkan</div>
                        <?php }else if($_GET['notif']=="editberhasil"){?>
                          <div class="alert alert-success" role="alert">
                          Data Berhasil Diubah</div>
                        <?php } ?>
                    <?php }?>
                </div>
                  <table class="table table-bordered">
                    <thead>                  
                      <tr style="background-color: #E9E9E9;">
                        <th width="5%">No</th>
                        <th width="15%">Wisata</th>
                        <th width="15%">Provinsi</th>
                        <th width="15%">Kota</th>
                        <th width="30%">Deskripsi_Wisata</th>
                        <th width="15%"><center>Aksi</center></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $sql_w="select `id_wisata`, `wisata`,`provinsi`, `kota`, `deskripsi_wisata` from `wisata` ";
                        if (isset($_GET["katakunci"])){
                          $katakunci_wisata = $_GET["katakunci"];
                          $sql_w .= " where `wisata` LIKE '%$katakunci_wisata%'";
                          }
                          $sql_w .= " ORDER BY `wisata`";
                       $query_w = mysqli_query($koneksi, $sql_w);
                       $no = 1;
                       while($data_w = mysqli_fetch_row($query_w)){
                         $id_wisata = $data_w[0];
                         $wisata = $data_w[1];
                         $provinsi = $data_w[2];
                         $kota = $data_w[3];
                         $deskripsi_wisata = $data_w[4];
                         $_SESSION['id_wisata']=$id_wisata;
                        ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $wisata; ?></td>
                        <td><?php echo $provinsi; ?></td>
                        <td><?php echo $kota; ?></td>
                        <td><?php echo $deskripsi_wisata; ?></td>
                        <td align="center">
                          <a href="editwisata.php?data=<?php echo $id_wisata;?>" class="btn btn-xs btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                          <a href="detailwisata.php?data=<?php echo $id_wisata;?></php>" class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                          <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $wisata; ?>?'))window.location.href = 'wisata.php?aksi=hapus&data=<?php echo $id_wisata;?>&notif=hapusberhasil'" class="btn btn-xs btn-warning"><i class="fas fa-trash" title="Hapus"></i></a>                         
                        </td>
                      </tr>
                      <?php $no++;}?>
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
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
