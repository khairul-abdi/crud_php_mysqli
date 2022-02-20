<?php include "../../templates-admin/header.php"; ?>
<div class="card-body">
  <table class="table" style="border:1px solid red;">
    <?php
    include '../../config/koneksi.php';
    $id = $_GET['id'];
    $datas = mysqli_query($koneksi, "SELECT mebel.id, tipe_kamar.nama AS tipe_kamar, mebel.nama AS fasilitas_kamar FROM mebel LEFT JOIN tipe_kamar ON tipe_kamar.id = mebel.id_tipe_kamar WHERE mebel.id='$id'");
    while ($data = mysqli_fetch_array($datas)) {
    ?>

      <tr>
        <th scope="row">Tipe Kamar</th>
        <td><?= $data['tipe_kamar'] ?></td>
      </tr>
      <tr>
        <th scope="row">Fasilitas Kamar</th>
        <td><?= $data['fasilitas_kamar'] ?></td>
      </tr>
      <tr>
        <th scope="row">Gambar</th>
        <td>
          <img src="gambar.php?id=<?php echo $data['id']; ?>" style="height:100px;width:100px;" />
        </td>
      </tr>
    <?php
    }
    ?>
  </table>

  <a href="fasilitas_kamar.php"><i class="fa-solid fa-arrow-left-long"></i> KEMBALI</a>
</div>

<?php include "../../templates-admin/footer.php"; ?>