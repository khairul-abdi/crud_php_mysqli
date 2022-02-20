<?php include "../../templates-admin/header.php"; ?>
<div class="main">
  <div class="search">
    <div class="search-container">
      <form action="/action_page.php">
        <input type="text" placeholder="Search.." name="search" class="search-input">
        <button type="submit" class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
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
              <a href="edit.php?id=<?php echo $user['id']; ?>">Ubah</a>
              <a href="hapus.php?id=<?php echo $user['id']; ?>">Hapus</a>
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
