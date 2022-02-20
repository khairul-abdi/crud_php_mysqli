<?php include "../../templates-admin/header.php"; ?>
<div class="main">
  <div class="section">
    <a href="tambah_fasilitas_kamar.php"><i class="fa-solid fa-circle-plus"></i> Tambah Fasilitas Kamar</a>
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
        $data = mysqli_query($koneksi, "SELECT mebel.id, tipe_kamar.nama as tipe_kamar, mebel.nama as fasilitas_kamar FROM mebel LEFT JOIN tipe_kamar ON tipe_kamar.id = mebel.id_tipe_kamar ORDER BY mebel.id;");
        while ($fasilitas = mysqli_fetch_array($data)) {
        ?>
          <tr>
            <td scope="row" style="text-align: center;"><?= $no++ ?></td>
            <td><?= $fasilitas['tipe_kamar']; ?></td>
            <td><?= $fasilitas['fasilitas_kamar']; ?></td>
            <td class="d-flex justify-content-evenly">
              <a href="detail_fasilitas.php?id=<?php echo $fasilitas['id']; ?>">Lihat</a>
              <a href="edit_fasilitas.php?id=<?php echo $fasilitas['id']; ?>">Ubah</a>
              <a href="hapus_fasilitas.php?id=<?php echo $fasilitas['id']; ?>">Hapus</a>
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
