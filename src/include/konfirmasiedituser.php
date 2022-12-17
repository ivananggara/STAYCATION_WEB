<?php
include("../koneksi/koneksi.php");
session_start();
if (isset($_SESSION['id_user'])) {
 $id_user  = $_SESSION['id_user'];
 $nama     = $_POST['nama'];
 $email    = $_POST['email'];
 $user     = $_POST['username'];
 $username = $username = mysqli_real_escape_string($koneksi, $user);
 $pass     = $_POST['password'];
 $pekerjaan = $_POST['pekerjaan'];
 $kontak = $_POST['kontak'];
 $pekerjaan = $_POST['pekerjaan'];
 $kontak = $_POST['kontak'];
 $password = mysqli_real_escape_string($koneksi, MD5($pass));
 $level    = $_POST['level'];
 //get foto
 $sql_f   = "SELECT `foto_profil` FROM `user` WHERE `id_user`='$id_user'";
 $query_f = mysqli_query($koneksi, $sql_f);
 while ($data_f = mysqli_fetch_row($query_f)) {
  $foto_profil = $data_f[0];
 }

 if (empty($nama)) {
  header("Location:edituser.php?notif=tambahkosong&jenis=nama");
 } elseif (empty($email)) {
  header("Location:edituser.php?notif=tambahkosong&jenis=email");
 } elseif (empty($username)) {
  header("Location:edituser.php?notif=tambahkosong&jenis=username");
 } elseif (empty($password)) {
  header("Location:edituser.php?notif=tambahkosong&jenis=password");
 } elseif (empty($pekerjaan)) {
  header("Location:edituser.php?notif=tambahkosong&jenis=pekerjaan");
 } elseif (empty($kontak)) {
  header("Location:edituser.php?notif=tambahkosong&jenis=kontak");
 } elseif (empty($level)) {
  header("Location:edituser.php?notif=tambahkosong&jenis=level");
 } else {
  $lokasi_file = $_FILES['foto_profil']['tmp_name'];
  $nama_file   = $_FILES['foto_profil']['name'];
  $direktori   = 'assets/img/' . $nama_file;
  if (move_uploaded_file($lokasi_file, $direktori)) {
   if (!empty($foto_profil)) {
    unlink("assets/img/$foto");
   }
   $sql = "UPDATE `user` set `id_user`='$id_user',`nama`='$nama',
                    `email`='$email',`username`='$username',
                    `password`='$password', `pekerjaan`='$pekerjaan', `kontak`='$kontak',`level`='$level',
                    `foto_profil`='$nama_file' WHERE `id_user`='$id_user'";
   mysqli_query($koneksi, $sql);
  } else {
   $sql = "update `user` set `nama`='$nama', `email`='$email', `username`='$username', `password`='$password'
                    where `id_user`='$id_user'";
   //echo $sql;
   mysqli_query($koneksi, $sql);
  }
  header("Location:pengaturanuser.php?notif=editberhasil");
 }
}