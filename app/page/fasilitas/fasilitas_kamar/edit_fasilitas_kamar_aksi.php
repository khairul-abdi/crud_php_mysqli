<?php

// koneksi database
include '../../../config/koneksi.php';

if (count($_FILES) > 0) {
	$id 						= $_POST['id'];
  $id_tipe_kamar	= $_POST['id-tipe-kamar'];
  $nama						= $_POST['nama'];

	if (is_uploaded_file($_FILES['gambar']['tmp_name'])) {
		$imgData = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
		$imageProperties = getimageSize($_FILES['gambar']['tmp_name']);

		$sql = "UPDATE mebel SET id_tipe_kamar='$id_tipe_kamar', nama='$nama', tipe_gambar='{$imageProperties['mime']}', data_gambar='{$imgData}'  WHERE id='$id'";
		$current_id = mysqli_query($koneksi, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
		if (isset($current_id)) {
			header("Location: ../fasilitas_kamar_dan_tipe_kamar.php");
		}
	}

}

