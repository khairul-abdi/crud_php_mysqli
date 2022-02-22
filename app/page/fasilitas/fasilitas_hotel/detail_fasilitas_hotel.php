<?php include "../../../templates-admin/header.php"; ?>
<div class="card-body ">
  <table class="table">
    <?php
    include '../../../config/koneksi.php';
    $id = $_GET['id'];
    $datas = mysqli_query($koneksi, "SELECT * FROM fasilitas_hotel WHERE id='$id'");
    while ($data = mysqli_fetch_array($datas)) {
    ?>

      <tr>
        <th scope="row">Nama Fasilitas</th>
        <td><?= $data['nama_fasilitas'] ?></td>
      </tr>
      <tr>
        <th scope="row">Gambar</th>
        <td>
          <img src="gambar.php?id=<?php echo $data['id']; ?>" style="height:100px;width:100px;" />
        </td>
      </tr>
      <tr>
        <th scope="row">Status</th>
        <td><?= $data['status'] ?></td>
      </tr>
      <tr>
        <th scope="row">Keterangan</th>
        <td><?= $data['keterangan'] ?></td>
      </tr>
    <?php
    }
    ?>
  </table>

  <a href="fasilitas_hotel.php"><i class="fa-solid fa-arrow-left-long"></i> KEMBALI</a>
</div>

<?php include "../../../templates-admin/footer.php"; ?>