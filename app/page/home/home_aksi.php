<?php
// koneksi database
include '../../config/koneksi.php';
require '../../alert/alert.php';

session_start();


var_dump($_POST);
$nama_pemesan       = $_POST['nama-pemesanan'];
$email              = $_POST['email'];
$phone              = $_POST['no-hp'];
$nama_tamu          = $_POST['nama-tamu'];
$tipe_fasilitas     = $_POST['tipe-kamar'];
$check_in           = formatDate($_POST['check-in']);
$check_out          = formatDate($_POST['check-out']);
$jumlah_kamar       = $_POST['jumlah-kamar'];
$status_pemesanan   = 'pemesanan berhasil';
$created_at         = formatDate('');
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


$sql = "INSERT INTO transaksi " .
  "(nama_pemesan, email, phone, nama_tamu, tipe_fasilitas, check_in, check_out, jumlah_kamar, status_pemesanan, created_at, updated_at) " . "VALUES " .
  "('$nama_pemesan', '$email', '$phone', '$nama_tamu', '$tipe_fasilitas', '$check_in', '$check_out', '$jumlah_kamar', '$status_pemesanan', '$created_at', '$updated_at')";

if ($koneksi->query($sql)) {
  flash('greeting', 'Hi there', FLASH_INFO);
  printf("Data berhasil di masukkan ke database  .<br />");
}
if ($koneksi->errno) {
  printf("Gagal memasukkan data ke database %s<br />", $$koneksi->error);
}

// mengalihkan halaman kembali ke index.php
header("location:home.php");
