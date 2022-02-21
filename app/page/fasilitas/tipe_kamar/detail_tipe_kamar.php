<?php include "../../../templates-admin/header.php"; ?>


<div class="main">
  <?php
  include '../../../config/koneksi.php';
  $datas = mysqli_query($koneksi, "SELECT * FROM tipe_kamar");
  while ($data = mysqli_fetch_array($datas)) {
    $id = $data['id'];
  ?>
  <div>
    <h3>DI BAGIAN INI NANTI ADA SLIDE GAMBAR</h3>
  </div>
    <div>
      <h2> Tipe <?php echo ucfirst($data['nama']); ?></h2>
    </div>
    <div>
      <div>
        <h4>Fasilitas</h4>
        <?php
        $data_kamar = mysqli_query($koneksi, 
          "SELECT  mebel.nama as fasilitas_kamar 
          FROM mebel 
          LEFT JOIN tipe_kamar 
          ON tipe_kamar.id = mebel.id_tipe_kamar 
          WHERE tipe_kamar.id='$id'"
        );
        while ($mebel = mysqli_fetch_array($data_kamar)) {
        ?>
          <ul>
            <li>
              <?php echo $mebel['fasilitas_kamar']; ?>
            </li>
          </ul>
        <?php
        }
        ?>
      </div>
    </div>
  <?php
  }
  ?>
</div>

<?php include "../../../templates-admin/footer.php"; ?>