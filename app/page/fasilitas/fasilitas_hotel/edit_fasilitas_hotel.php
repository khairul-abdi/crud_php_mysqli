<?php include "../../../templates-admin/header.php"; ?>
<div class="main form-detail">
  <br />
  <a href="fasilitas_hotel.php"><i class="fa-solid fa-arrow-left-long"></i> KEMBALI</a>
  <h3>UBAH FASILITAS HOTEL</h3>
  <?php
  include '../../../config/koneksi.php';
  $id = $_GET['id'];
  $datas = mysqli_query($koneksi, "SELECT * FROM fasilitas_hotel WHERE id='$id'");
  while ($data = mysqli_fetch_array($datas)) {
  ?>
    <form enctype="multipart/form-data" method="post" action="edit_fasilitas_hotel_aksi.php">
      <table>
        <tr>
          <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
          <td>Nama Fasilitas</td>
          <td><input type="text" id="nama-fasilitas" name="nama-fasilitas" value="<?php echo $data['nama_fasilitas']; ?>"></td>
        </tr>
        <tr>
          <td>Upload Image File</td>
          <td><input id="gambar" name="gambar" type="file" required /></td>
        </tr>
        <tr>
          <td>Status</td>
          <td>
            <div class="custom-select">
              <select id="status" name="status">
                <?php
                if ($data['status'] == "bagus") {
                  echo "<option value='bagus' selected>Bagus</option>";
                } elseif ($data['status'] == "rusak") {
                  echo "<option value='rusak' selected>Rusak</option>";
                } elseif ($data['status'] == "perbaikan") {
                  echo "<option value='perbaikan' selected>Rusak</option>";
                }
                ?>
                <option value="bagus">Bagus</option>
                <option value="rusak">Rusak</option>
                <option value="perbaikan">Perbakan</option>
              </select>
            </div>
          </td>
        </tr>
        <tr>
          <td>Keterangan</td>
          <td><input type="text" id="keterangan" name="keterangan" value="<?php echo $data['keterangan']; ?>"></td>
        </tr>
        <tr>
          <td></td>
          <td><button type="submit" style="
          background-color: #4CAF50; /* Green */
          border: none;
          color: white;
          padding: 10px 25px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          margin: 4px 2px;
          cursor: pointer;
          font-size: 16px;
          font-weight:bold;
          border-radius:4px;
          float:right;
        ">Pesan</button></td>
        </tr>
      </table>
    </form>
  <?php
  }
  ?>
</div>
<?php include "../../../templates-admin/footer.php"; ?>