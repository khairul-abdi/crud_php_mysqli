<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM fasilitas_hotel WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location: fasilitas_hotel.php");
 
?>