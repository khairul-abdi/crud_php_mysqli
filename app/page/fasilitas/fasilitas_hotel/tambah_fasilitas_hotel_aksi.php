<?php

// koneksi database
include '../../../config/koneksi.php';

if (count($_FILES) > 0) {
  $nama_fasilitas = $_POST['nama-fasilitas'];
  $status 				= $_POST['status'];
  $keterangan 		= $_POST['keterangan'];

	if (is_uploaded_file($_FILES['gambar']['tmp_name'])) {
		$imgData = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
		$imageProperties = getimageSize($_FILES['gambar']['tmp_name']);

		$sql = "INSERT INTO fasilitas_hotel(nama_fasilitas, tipe_gambar, data_gambar, status, keterangan)
	VALUES('$nama_fasilitas', '{$imageProperties['mime']}', '{$imgData}', '$status', ' $keterangan')";
		$current_id = mysqli_query($koneksi, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
		if (isset($current_id)) {
			header("Location: fasilitas_hotel.php");
		}
	}

}

