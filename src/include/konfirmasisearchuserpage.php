<?php
  include("../koneksi/koneksi.php");
  session_start();
  $katakunci = strtolower($_POST['search']);
  header("Location:search.php?katakunci=$katakunci")
?>