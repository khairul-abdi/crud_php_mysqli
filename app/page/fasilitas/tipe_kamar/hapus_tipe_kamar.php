<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM tipe_kamar WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location: ../fasilitas_kamar_dan_tipe_kamar.php");
 
?>