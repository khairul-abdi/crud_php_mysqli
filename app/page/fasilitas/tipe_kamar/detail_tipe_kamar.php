<?php include "../../../templates-admin/header.php"; ?>


<div class="main">
  <?php
  include '../../../config/koneksi.php';
  $datas = mysqli_query($koneksi, "SELECT * FROM tipe_kamar");
  while ($data = mysqli_fetch_array($datas)) {
    $tipeKamar = [];
    $id = $data['id'];
    $gambar = mysqli_query(
      $koneksi,
      "SELECT mebel.id, 
              mebel.nama as fasilitas_kamar,
              mebel.tipe_gambar,
              mebel.data_gambar
          FROM mebel 
          LEFT JOIN tipe_kamar 
          ON tipe_kamar.id = mebel.id_tipe_kamar 
          WHERE tipe_kamar.id='$id'"
    );

    $no = 1;
    $rowCount = mysqli_num_rows($gambar);
    while ($mebel = mysqli_fetch_array($gambar)) {
      array_push($tipeKamar, $mebel);
    }
  ?>

    <div>
      <?php
      foreach ($tipeKamar as $rows) {
      ?>
        <div class="container-slide-show">
          <div class="mySlides">
            <div class="numbertext"><?= $no++ ?> / <?= $rowCount ?></div>
            <img src="image_view.php?id=<?php echo $rows["id"]; ?>" style="width:100%">
          </div>
        </div>
      <?php
      }
      $no = 0;
      ?>
    </div>
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div class="row">
      <?php
      $nos = 0;
      foreach ($tipeKamar as $row) {
      ?>
        <div class="column">
          <img class="demo cursor" src="image_view.php?id=<?php echo $row['id']; ?>" style="width:100%" onclick="currentSlide(<?php $nos++; echo $nos; ?>)" alt="<?php echo $row['fasilitas_kamar'] ?>">
        </div>
      <?php
      }
      ?>
    </div>

    <div>
      <h2> Tipe <?php echo ucfirst($data['nama']); ?></h2>
    </div>

    <div>
      <h4>Fasilitas</h4>
      <ul>
        <?php
        foreach ($tipeKamar as $row) {
        ?>
          <li>
            <?php echo $row['fasilitas_kamar']; ?>
          </li>
        <?php
        }
        ?>
      </ul>
    </div>
  <?php
  }
  ?>
</div>

<?php include "../../../templates-admin/footer.php"; ?>