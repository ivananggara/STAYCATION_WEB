<?php
 include("../koneksi/koneksi.php");
 session_start();
 if(isset($_SESSION['id_user'])){
     $id_user = $_SESSION['id_user'];
     $username = $_POST['username'];
     $pekerjaan = $_POST['pekerjaan'];
     $sql_f = "SELECT `foto_profil` FROM `user` WHERE `id_user`='$id_user'";
        $query_f = mysqli_query($koneksi,$sql_f);
        while($data_f = mysqli_fetch_row($query_f)){
            $foto_profil = $data_f[0];
        }
        if(empty($username)){
            header("Location:edit_profile.php?notif=editkosong&jenis=username");
        }else {
            $lokasi_file = $_FILES['foto_profil']['tmp_name'];
            $nama_file = $_FILES['foto_profil']['name'];
            $direktori = 'assets/img/'.$nama_file;
            if(move_uploaded_file($lokasi_file,$direktori)){
                    if(!empty($foto_profil)){
                        unlink("assets/img/$foto_profil");
                    }
            $sql = "update `user` set `username`='$username', 
                    `pekerjaan`='$pekerjaan',`foto_profil`='$nama_file' 
                    where `id_user`='$id_user'";
                    //echo $sql;
            mysqli_query($koneksi,$sql);
            }else{
            $sql = "update `user` set `username`='$username', 
            `pekerjaan`='$pekerjaan' where `id_user`='$id_user'";
                    //echo $sql;
            mysqli_query($koneksi,$sql);
            }
                header("Location:edit_profile.php?notif=editberhasil");
        }
    }
 ?>