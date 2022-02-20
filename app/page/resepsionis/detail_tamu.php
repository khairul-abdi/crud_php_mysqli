<?php include "../../templates-admin/header.php"; ?>
<div class="card-body ">
  <table class="table">
    <?php
      include '../../config/koneksi.php';
      $id = $_GET['id'];
      $datas = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE id='$id'");
      while($data = mysqli_fetch_array($datas)){
    ?>

    <tr>
      <th scope="row">Nama Pemesan</th>
      <td><?= $data['nama_pemesan'] ?></td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td><?= $data['email'] ?></td>
    </tr>
    <tr>
      <th scope="row">Phone</th>
      <td><?= $data['phone'] ?></td>
    </tr>
    <tr>
      <th scope="row">Nama Tamu</th>
      <td><?= $data['nama_tamu'] ?></td>
    </tr>
    <tr>
      <th scope="row">Tipe Fasilitas</th>
      <td><?= $data['tipe_fasilitas'] ?></td>
    </tr>
    <tr>
      <th scope="row">Check In</th>
      <td><?= $data['check_in'] ?></td>
    </tr>
    <tr>
      <th scope="row">Check Out</th>
      <td><?= $data['check_out'] ?></td>
    </tr>
    <tr>
      <th scope="row">Jumlah kamar</th>
      <td><?= $data['total_kamar'] ?></td>
    </tr>
    <tr>
      <th scope="row">Status Pemesan</th>
      <td><?= $data['status_pemesanan'] ?></td>
    </tr>
  <?php 
	  }
	?>
  </table>

  <a href="resepsionis.php"><i class="fa-solid fa-arrow-left-long"></i> KEMBALI</a>
</div>

<?php include "../../templates-admin/footer.php"; ?>