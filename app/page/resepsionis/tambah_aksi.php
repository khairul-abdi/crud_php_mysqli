<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
var_dump($_POST);
// var_dump("DATA CONVERT => ",formatDate($_POST['check-in']));

$nama_pemesan       = $_POST['nama-pemesanan'];
$email              = $_POST['email'];
$phone              = $_POST['no-hp'];
$nama_tamu          = $_POST['nama-tamu'];
$tipe_fasilitas     = $_POST['tipe-kamar'];
$check_in           = formatDate($_POST['check-in']);
$check_out          = formatDate($_POST['check-out']);
$total_kamar        = $_POST['jumlah-kamar'];
$status_pemesanan   = $_POST['status-pemesanan'];
$created_at         = formatDate('');
$updated_at         = formatDate('');

echo ("\n");
echo ("CHECK IN => " . $check_in . "\n");
echo ("\n");

echo ("CHECK OUT => " . $check_out . "\n");
echo ("\n");
echo ("LOCATION => " . $_SERVER['REQUEST_URI'] . "\n");

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
  "(nama_pemesan, email, phone, nama_tamu, tipe_fasilitas, check_in, check_out, total_kamar, status_pemesanan, created_at, updated_at) " . "VALUES " .
  "('$nama_pemesan', '$email', '$phone', '$nama_tamu', '$tipe_fasilitas', '$check_in', '$check_out', '$total_kamar', '$status_pemesanan', '$created_at', '$updated_at')";

if ($koneksi->query($sql)) {
  printf("Record inserted successfully.<br />");
}
if ($koneksi->errno) {
  printf("Could not insert record into table: %s<br />", $mysqli→error);
}

// mengalihkan halaman kembali ke index.php
header("location:resepsionis.php");
