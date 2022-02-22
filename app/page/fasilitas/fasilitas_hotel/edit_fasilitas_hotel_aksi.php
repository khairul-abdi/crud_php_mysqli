<?php

// koneksi database
include '../../../config/koneksi.php';

if (count($_FILES) > 0) {
	$id 						= $_POST['id'];
  $nama_fasilitas = $_POST['nama-fasilitas'];
  $status 				= $_POST['status'];
  $keterangan 		= $_POST['keterangan'];

	if (is_uploaded_file($_FILES['gambar']['tmp_name'])) {
		$imgData = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
		$imageProperties = getimageSize($_FILES['gambar']['tmp_name']);

		$sql = "UPDATE fasilitas_hotel SET nama_fasilitas='$nama_fasilitas', tipe_gambar='{$imageProperties['mime']}', data_gambar='{$imgData}', status='$status', keterangan='$keterangan'  WHERE id='$id'";
		$current_id = mysqli_query($koneksi, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
		if (isset($current_id)) {
			header("Location: fasilitas_hotel.php");
		}
	}

}

