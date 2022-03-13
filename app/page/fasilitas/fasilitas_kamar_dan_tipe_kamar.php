<?php 
session_start();
if (!isset($_SESSION["login"]) && $_SESSION["role"] = 'admin') {
  header("Location: http://localhost/php_crud_hotel_reservation/app/page/login/login.php");
  exit;
}

include "../../templates-admin/header.php"; 
?>
<div class="main">
  <div>
    <div>
      <a href="tipe_kamar/tambah_tipe_kamar.php"><i class="fa-solid fa-circle-plus"></i> Tambah Kamar</a>
    </div>
    <div>
      <table id="customers">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Kamar</th>
            <th scope="col">Jumlah Kamar</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include '../../config/koneksi.php';
          $no = 1;
          $datas = mysqli_query($koneksi, "SELECT * FROM tipe_kamar");
          while ($data = mysqli_fetch_array($datas)) {
          ?>
            <tr>
              <td scope="row" style="text-align: center;"><?= $no++ ?></td>
              <td><?= $data['nama']; ?></td>
              <td><?= $data['total_kamar']; ?></td>
              <td class="d-flex justify-content-evenly">
                <a href="tipe_kamar/detail_tipe_kamar.php?id=<?php echo $data['id']; ?>">Lihat</a>
                <a href="tipe_kamar/edit_tipe_kamar.php?id=<?php echo $data['id']; ?>">Ubah</a>
                <a href="tipe_kamar/hapus_tipe_kamar.php?id=<?php echo $data['id']; ?>">Hapus</a>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <div>
    <div class="section">
      <a href="fasilitas_kamar/tambah_fasilitas_kamar.php"><i class="fa-solid fa-circle-plus"></i> Tambah Fasilitas Kamar</a>
    </div>
    <div>
      <table id="customers">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Tipe Kamar</th>
            <th scope="col">Nama Fasilitas</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include '../../config/koneksi.php';
          $no = 1;
          $data = mysqli_query($koneksi, "SELECT mebel.id, tipe_kamar.nama as tipe_kamar, mebel.nama as fasilitas_kamar FROM mebel LEFT JOIN tipe_kamar ON tipe_kamar.id = mebel.id_tipe_kamar ORDER BY tipe_kamar;");
          while ($fasilitas = mysqli_fetch_array($data)) {
          ?>
            <tr>
              <td scope="row" style="text-align: center;"><?= $no++ ?></td>
              <td><?= $fasilitas['tipe_kamar']; ?></td>
              <td><?= $fasilitas['fasilitas_kamar']; ?></td>
              <td class="d-flex justify-content-evenly">
                <a href="fasilitas_kamar/detail_fasilitas_kamar.php?id=<?php echo $fasilitas['id']; ?>">Lihat</a>
                <a href="fasilitas_kamar/edit_fasilitas_kamar.php?id=<?php echo $fasilitas['id']; ?>">Ubah</a>
                <a href="fasilitas_kamar/hapus_fasilitas_kamar.php?id=<?php echo $fasilitas['id']; ?>">Hapus</a>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include "../../templates-admin/footer.php"; ?>