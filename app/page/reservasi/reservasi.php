<?php 

session_start();
if (!isset($_SESSION["login"])) {
  header("Location: http://localhost/php_crud_hotel_reservation/app/page/login/login.php");
  exit;
}

include "../../templates-admin/header.php"; 
?>
<div class="main">
  <div class="search">
    <div class="search-container">
      <form action="" method="post">
        <input type="date" class="calender" id="search-by-date" name="search-by-date">
        <button type="submit" class="btn-search" name="cari">Cari tanggal</button>
      </form>
    </div>
    <div class="search-container">
      <form action="" method="post">
        <input type="text" placeholder="Search.." id="search" name="search" class="search-input">
        <button type="submit" class="btn-search" name="cari"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>
    </div>
  </div>

  <div class="section">
    <a href="tambah_tamu.php"><i class="fa-solid fa-circle-plus"></i> TAMBAH TAMU</a>
  </div>

  <div>
    <table id="customers">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Tamu</th>
          <th scope="col">Tanggal Check In</th>
          <th scope="col">Tanggal Check Out</th>
          <th scope="col">Status</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include '../../config/koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM transaksi");

        // tombol cari ditekan
        if (isset($_POST["cari"])) {
          if (isset($_POST["search"])) {
            $keyword = $_POST["search"];
            $data = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE nama_tamu LIKE '%$keyword%'");
          } elseif (isset($_POST["search-by-date"])) {
            $keyword = $_POST["search-by-date"];
            $data = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE check_in LIKE '%$keyword%' OR check_out LIKE '%$keyword%'");
          } elseif (isset($_POST["search"]) == "" && isset($_POST["search-by-date"]) == "") {
            $data = mysqli_query($koneksi, "SELECT * FROM transaksi");
          }
        }

        while ($user = mysqli_fetch_array($data)) {
        ?>
          <tr>
            <td scope="row" style="text-align: center;"><?= $no++ ?></td>
            <td><?= $user['nama_tamu']; ?></td>
            <td><?= $user['check_in']; ?></td>
            <td><?= $user['check_out']; ?></td>
            <td><?= $user['status_pemesanan']; ?></td>
            <td class="d-flex justify-content-evenly">
              <a href="detail_tamu.php?id=<?php echo $user['id']; ?>">Detail</a>
              <a href="../../cetak/cetak.php?id=<?php echo $user['id']; ?>">Cetak</a>
              <a href="edit_tamu.php?id=<?php echo $user['id']; ?>">Ubah</a>
              <?php if($_SESSION["role"] == "admin") {  ?>
                <a href="hapus_tamu.php?id=<?php echo $user['id']; ?>">Hapus</a>
              <?php }; ?>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
<?php include "../../templates-admin/footer.php"; ?>

