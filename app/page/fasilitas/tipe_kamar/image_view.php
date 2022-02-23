<?php
include '../../../config/koneksi.php';
// var_dump($_GET['id']);
// echo $_GET['id'];
if (isset($_GET['id'])) {
  $sql = "SELECT tipe_gambar,data_gambar FROM mebel WHERE id=" . $_GET['id'];
  $result = mysqli_query($koneksi, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($conn));
  $row = mysqli_fetch_array($result);
  header("Content-type: " . $row["tipe_gambar"]);
  echo $row["data_gambar"];
}
mysqli_close($conn);
