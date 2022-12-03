<?php
$koneksi = mysqli_connect("localhost","root","","staycation");
if (!$koneksi){
    die("Koneksi Error : ".mysqli_connect_errno());
}
?>