<?php
require '../../config/koneksi.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>alert('user baru berhasil ditambahkan!');</script>";
  } else {
    echo mysqli_error($koneksi);
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Hebat</title>
  <style>
    label {
      display: block;
    }
  </style>
</head>

<body>
  <h1>Halaman Registrasi</h1>

  <form action="register_aksi.php" method="post">
    <ul type="none">
      <li>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
      </li>
      <li>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
      </li>
      <li>
        <label for="password2">Konfirmasi password :</label>
        <input type="password" name="password2" id="password2">
      </li>
      <li>
        <label for="role">Pilih akses:</label>
        <select name="role" id="role">
          <option selected>Pilih akses</option>
          <option value="admin">Admin</option>
          <option value="resepsionis">Resepsionis</option>
        </select>
      </li>
      <li>
        <button type="submit" name="register">Register</button>
      </li>
    </ul>
  </form>
</body>

</html>