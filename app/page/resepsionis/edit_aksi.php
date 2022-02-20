<?php

// koneksi database
include '../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
var_dump($_POST);
$id                 = $_POST['id'];
$nama_pemesan       = $_POST['nama-pemesanan'];
$email              = $_POST['email'];
$phone              = $_POST['no-hp'];
$nama_tamu          = $_POST['nama-tamu'];
$tipe_fasilitas     = $_POST['tipe-kamar'];
$check_in           = formatDate($_POST['check-in']);
$check_out          = formatDate($_POST['check-out']);
$total_kamar        = $_POST['jumlah-kamar'];
$status_pemesanan   = $_POST['status-pemesanan'];
$created_at         = $_POST['created-at'];
$updated_at         = formatDate('');
 
function formatDate($dateString)
{
  if ($dateString == '') {
    $newDate = date("Y-m-d");
  } else {
    $newDate = date("Y-m-d", strtotime($dateString));
  }
  return $newDate;
}

// update data ke database
mysqli_query($koneksi, "UPDATE transaksi SET nama_pemesan='$nama_pemesan', email='$email' ,phone='$phone', nama_tamu='$nama_tamu', tipe_fasilitas='$tipe_fasilitas', check_in='$check_in', check_out='$check_out', total_kamar='$total_kamar', status_pemesanan='$status_pemesanan', created_at='$created_at', updated_at='$updated_at' WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:resepsionis.php");
 
?>