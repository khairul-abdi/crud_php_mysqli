<?php

// koneksi database
include '../../config/koneksi.php';

// menangkap data yang di kirim dari form
$id                 = $_POST['id'];
$nama_pemesan       = $_POST['nama-pemesanan'];
$email              = $_POST['email'];
$phone              = $_POST['no-hp'];
$nama_tamu          = $_POST['nama-tamu'];
$tipe_fasilitas     = $_POST['tipe-kamar'];
$check_in           = formatDate($_POST['check-in']);
$check_out          = formatDate($_POST['check-out']);
$jumlah_kamar       = $_POST['jumlah-kamar'];
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

//logic jika status pemesanan (check in atau check out) maka table tipe_kamar perlu di update total kamarnya
if ($status_pemesanan == "check in" || $status_pemesanan == "check out") {

  $datas = mysqli_query($koneksi, "SELECT * FROM tipe_kamar");

  while ($data = mysqli_fetch_array($datas)) {
    if ($data['nama'] == $tipe_fasilitas  && $status_pemesanan == "check in") {
      $id = $data['id'];
      $total_kamar = $data['total_kamar'] - $jumlah_kamar; //dikurangi sebanyak jumlah kamar yang di pesan 
      if ($total_kamar > -1) {
        mysqli_query($koneksi, "UPDATE tipe_kamar SET total_kamar='$total_kamar' WHERE id='$id'");
      } else {
        printf("Kamar tidak cukup untuk pemesanan anda %s<br />");
      }
    } elseif ($data['nama'] == $tipe_fasilitas  && $status_pemesanan == "check out") {
      $id = $data['id'];
      $total_kamar = $data['total_kamar'] + $jumlah_kamar; //dikurangi sebanyak jumlah kamar yang di pesan 
      mysqli_query($koneksi, "UPDATE tipe_kamar SET total_kamar='$total_kamar' WHERE id='$id'");
    }
  }
}

// update data ke database
mysqli_query($koneksi, "UPDATE transaksi SET nama_pemesan='$nama_pemesan', email='$email', phone='$phone', nama_tamu='$nama_tamu', tipe_fasilitas='$tipe_fasilitas', check_in='$check_in', check_out='$check_out', jumlah_kamar='$jumlah_kamar', status_pemesanan='$status_pemesanan', created_at='$created_at', updated_at='$updated_at' WHERE id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:reservasi.php");
