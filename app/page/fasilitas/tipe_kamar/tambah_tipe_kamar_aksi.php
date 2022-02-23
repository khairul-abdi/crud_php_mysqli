<?php
// koneksi database
include '../../../config/koneksi.php';

// menangkap data yang di kirim dari form

$tipe_kamar  = $_POST['tipe-kamar'];
$total_kamar = $_POST['total-kamar'];

$sql = "INSERT INTO tipe_kamar " .
  "(nama, total_kamar) " . "VALUES " .
  "('$tipe_kamar', '$total_kamar')";

if ($koneksi->query($sql)) {
  printf("Data berhasil di masukkan ke database  .<br />");
}
if ($koneksi->errno) {
  printf("Gagal memasukkan data ke database %s<br />", $$koneksi->error);
}

// mengalihkan halaman kembali ke index.php
header("location: ../fasilitas_kamar_dan_tipe_kamar.php");
