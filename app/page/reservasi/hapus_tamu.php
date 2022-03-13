<?php 

session_start();
if (!isset($_SESSION["login"])) {
  header("Location: http://localhost/php_crud_hotel_reservation/app/page/login/login.php");
  exit;
}

// koneksi database
include '../../config/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM transaksi WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:reservasi.php");
 
?>