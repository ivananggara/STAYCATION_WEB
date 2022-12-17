<?php
    include("../koneksi/koneksi.php");
    session_start();
    $id_hotel = $_SESSION['id_hotel'];
    $id_wisata = $_SESSION['id_wisata'];
    if(isset($_SESSION['id_user']) && $_SESSION['id_hotel']){
        $night = $_POST['night'];
        $id_jenis_kamar = strtolower($_POST['id_jenis_kamar']);
        // $_SESSION['id_jenis_kamar'] = $id_jenis_kamar;
        if(empty($night)){
            header("Location:detail_hotels.php?hotel=$id_hotel&data=$id_wisata&notif=datakosong&jenis=malam");
        }else if(empty($id_jenis_kamar)){
            header("Location:detail_hotels.php?hotel=$id_hotel&data=$id_wisata&notif=datakosong&jenis=kamar");
        }else{
            header("Location:booking_information.php?hotel=$id_hotel&data=$id_jenis_kamar&malam=$night");
        }
    } else{
        header("Location:detail_hotels.php?hotel=$id_hotel&data=$id_wisata&notif=belumsignin");
    }
?>