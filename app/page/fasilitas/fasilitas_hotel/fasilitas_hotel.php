<?php include "../../../templates-admin/header.php"; ?>
<div class="main">

  <div class="section">
    <a href="tambah_fasilitas_hotel.php"><i class="fa-solid fa-circle-plus"></i> TAMBAH TAMU</a>
  </div>

  <div>
    <table id="customers">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Fasilitas</th>
          <th scope="col">Gambar</th>
          <th scope="col">Status</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include '../../../config/koneksi.php';
        $no = 1;
        $datas = mysqli_query($koneksi, "SELECT * FROM fasilitas_hotel");

        while ($data = mysqli_fetch_array($datas)) {
        ?>
          <tr>
            <td scope="row" style="text-align: center;"><?= $no++ ?></td>
            <td><?= $data['nama_fasilitas']; ?></td>
            <td>
              <img src="gambar.php?id=<?php echo $data['id']; ?>" style="height:100px;width:100px;" />
            </td>
            <td><?= $data['status']; ?></td>
            <td><?= $data['keterangan']; ?></td>
            <td class="d-flex justify-content-evenly">
              <a href="detail_fasilitas_hotel.php?id=<?php echo $data['id']; ?>">Lihat</a>
              <a href="edit_fasilitas_hotel.php?id=<?php echo $data['id']; ?>">Ubah</a>
              <a href="hapus_fasilitas_hotel.php?id=<?php echo $data['id']; ?>">Hapus</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
<?php include "../../../templates-admin/footer.php"; ?>