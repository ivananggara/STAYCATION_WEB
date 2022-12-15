<?php
    include("../koneksi/koneksi.php");
    session_start();
    if((isset($_GET['aksi']))&&(isset($_GET['data']))){
        if($_GET['aksi']=='hapus'){
            $id_transaksi = $_GET['data'];
            //hapus kategori buku
            $sql_dh = "delete from `transaksi` 
            where `id_transaksi` = '$id_transaksi'";
            mysqli_query($koneksi,$sql_dh);
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
            <h3><i class="fas fa-receipt"></i> Transaksi</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Transaksi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="" action="">
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
                  <div class="alert alert-success" role="alert">Data Berhasil Diubah</div>
              </div>
                  <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th width="5%">No</th>
                        <th width="20%">Nama</th>
                        <th width="20%">Hotel</th>
                        <th width="20%">Jenis Kamar</th>
                        <th width="20%">Status</th>
                        <th width="15%"><center>Aksi</center></th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_t = "SELECT `t`.`id_transaksi`, `t`.`status`, `u`.`nama`, `h`.`hotel`, `j`.`jenis_kamar` FROM `transaksi` `t` INNER JOIN `user` `u` ON `t`.`id_user` = `u`.`id_user` INNER JOIN `hotel` `h` ON `t`.`id_hotel` = `h`.`id_hotel` INNER JOIN `jenis_kamar` `j` ON `t`.`id_jenis_kamar` = `j`.`id_jenis_kamar`";
                        if(isset($_GET["katakunci"])){
                            $katakunci_nama = $_GET["katakunci"];
                            $sql_t .= " WHERE `u`.`nama` LIKE '%$katakunci_nama%'";
                            }
                            $sql_t .= " ORDER BY `u`.`nama`";
                        $query_t = mysqli_query($koneksi, $sql_t);
                        $no = 1;
                        while($data_t = mysqli_fetch_row($query_t)){
                            $id_transaksi = $data_t[0];
                            $status = $data_t[1];
                            $nama = $data_t[2];
                            $hotel = $data_t[3];
                            $jenis_kamar = $data_t[4];
                            ?>
                             <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $nama; ?></td>
                                <td><?php echo $hotel; ?></td>
                                <td><?php echo $jenis_kamar; ?></td>
                                <td><?php echo $status; ?></td>
                                <td align="center">
                                <a href="detailtransaksi.php?data=<?php echo $id_transaksi;?>" class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                                <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $nama; ?>?'))window.location.href = 'transaksi.php?aksi=hapus&data=<?php echo $id_transaksi;?>&notif=hapusberhasil'" class="btn btn-xs btn-warning"><i class="fas fa-trash" title="Hapus"></i></a>                           
                                </td>
                            </tr>
                        <?php $no++;}
                        ?>
                     
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
