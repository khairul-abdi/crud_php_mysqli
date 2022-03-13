<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_reservationHotel");

//check connection
if (mysqli_connect_errno()) {
  echo "Koneksi database gagal : " . mysqli_connect_errno();
  exit();
}

// printf('Connected successfully.<br />');

