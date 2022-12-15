<?php
include "../koneksi/koneksi.php";
$nama        = $_POST['nama'];
$email       = $_POST['email'];
$user        = $_POST['username'];
$pass        = $_POST['password'];
$pekerjaan   = $_POST['pekerjaan'];
$kontak      = $_POST['kontak'];
$level       = $_POST['level'];
$username    = mysqli_real_escape_string($koneksi, $user);
$password    = mysqli_real_escape_string($koneksi, MD5($pass));
$lokasi_file = $_FILES['foto_profil']['tmp_name'];
$nama_file   = $_FILES['foto_profil']['name'];
$direktori   = 'assets/img/' . $nama_file;

if (empty($nama)) {
 header("Location:tambahuser.php?notif=tambahkosong&jenis=nama");
} elseif (empty($email)) {
 header("Location:tambahuser.php?notif=tambahkosong&jenis=email");
}elseif (empty($pekerjaan)) {
header("Location:tambahuser.php?notif=tambahkosong&jenis=pekerjaan");
}elseif (empty($kontak)) {
header("Location:tambahuser.php?notif=tambahkosong&jenis=kontak");
} elseif (empty($username)) {
 header("Location:tambahuser.php?notif=tambahkosong&jenis=username");
} elseif (empty($password)) {
 header("Location:tambahuser.php?notif=tambahkosong&jenis=password");
} elseif (empty($level)) {
 header("Location:tambahuser.php?notif=tambahkosong&jenis=level");
} elseif (!move_uploaded_file($lokasi_file, $direktori)) {
 header("Location:tambahuser.php?notif=tambahkosong&jenis=foto_profil");
} else {
 $sql_user = "INSERT INTO `user`
(`nama`, `email`,`username`,`password`,`pekerjaan`, `kontak`,`level`,`foto_profil`)
VALUES ('$nama','$email','$username','$password', '$pekerjaan','$kontak','$level','$nama_file')";
 mysqli_query($koneksi, $sql_user);
 $id_user = mysqli_insert_id($koneksi);
 header("Location:pengaturanuser.php?notif=tambahberhasil");
}