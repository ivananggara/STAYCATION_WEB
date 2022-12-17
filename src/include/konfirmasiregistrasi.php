<?php
include "../koneksi/koneksi.php";
$nama        = $_POST['nama'];
$email       = $_POST['email'];
$user        = $_POST['username'];
$pass        = $_POST['password'];
$username    = mysqli_real_escape_string($koneksi, $user);
$password    = mysqli_real_escape_string($koneksi, MD5($pass));

if (empty($nama)) {
 header("Location:register.php?notif=tambahkosong&jenis=nama");
} elseif (empty($email)) {
 header("Location:register.php?notif=tambahkosong&jenis=email");
}elseif (empty($username)) {
 header("Location:register.php?notif=tambahkosong&jenis=username");
} elseif (empty($password)) {
 header("Location:register.php?notif=tambahkosong&jenis=password");
} else {
 $sql_user = "INSERT INTO `user`
(`nama`, `email`,`username`,`password`)
VALUES ('$nama','$email','$username','$password')";
 mysqli_query($koneksi, $sql_user);
 $id_user = mysqli_insert_id($koneksi);
 header("Location:index.php");
}