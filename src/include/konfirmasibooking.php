<?php
include "../koneksi/koneksi.php";
session_start();
$id_user = $_SESSION['id_user'];
$id_hotel = $_SESSION['id_hotel'];
$id_jenis_kamar = $_SESSION['id_jenis_kamar'];
$tgl_checkin = date('Y-m-d', strtotime($_POST['check-in']));
$tgl_checkout = date('Y-m-d', strtotime($_POST['check-out']));
$nama_pengirim = $_POST['nama_pengirim'];

$lokasi_file = $_FILES['bukti_transfer']['tmp_name'];
$nama_file   = $_FILES['bukti_transfer']['name'];
$direktori   = 'assets/img/' . $nama_file;

if (empty($tgl_checkin)) {
 header("Location:booking_information.php?notif=tambahkosong&jenis=check in");
} elseif (empty($tgl_checkin)) {
 header("Location:booking_information.php?notif=tambahkosong&jenis=check Out");
}elseif (empty($nama_pengirim)) {
header("Location:booking_information.php?notif=tambahkosong&jenis=nama pengirim");
} else {
 $sql_t = "INSERT INTO `transaksi`
(`id_hotel`, `id_jenis_kamar`,`id_user`,`bukti_transfer`,`nama_pengirim`,`tgl_checkin`,`tgl_checkout`)
VALUES ('$id_hotel','$id_jenis_kamar','$id_user','$nama_file', '$nama_pengirim','$tgl_checkin','$tgl_checkout')";
 mysqli_query($koneksi, $sql_t);
 header("Location:waiting_validation.php");
}