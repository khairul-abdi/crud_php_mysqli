<?php
session_start();

require '../../config/koneksi.php';

if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($koneksi, "SELECT * FROM user WHERE nama_user = '$username'");
  //cek username
  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      // set session
      $_SESSION["login"] = true;
      $_SESSION["role"] = $row["role"];
      // var_dump($_SESSION["role"]);

      header("Location: http://localhost/php_crud_hotel_reservation/app/page/reservasi/reservasi.php");
      exit;
    }
  }

  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
</head>


<body>
  <h1>Halaman Login</h1>

  <?php if (isset($error)) : ?>
    <p style="color: red; font-style:italic;">username/password salah</p>
  <?php endif; ?>

  <form action="" method="post">
    <ul type="none">
      <li>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
      </li>
      <li>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
      </li>
      <li>
        <button type="submit" name="login">Login</button>
      </li>
    </ul>
  </form>
</body>

</html>