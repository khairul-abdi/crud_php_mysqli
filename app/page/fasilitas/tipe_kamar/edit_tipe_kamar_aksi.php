<?php

// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
var_dump($_POST);
$id           = $_POST['id'];
$tipe_kamar   = $_POST['tipe-kamar'];
$total_kamar = $_POST['total-kamar'];

// update data ke database
mysqli_query($koneksi, "UPDATE tipe_kamar SET nama='$tipe_kamar', total_kamar='$total_kamar' WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location: ../fasilitas_kamar_dan_tipe_kamar.php");
 
?>