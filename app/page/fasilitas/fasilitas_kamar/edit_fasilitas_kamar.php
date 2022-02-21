<?php include "../../../templates-admin/header.php"; ?>
<div class="main form-detail">
  <br />
  <a href="../fasilitas_kamar_dan_tipe_kamar.php"><i class="fa-solid fa-arrow-left-long"></i> KEMBALI</a>
  <h3>UBAH FASILITAS KAMAR</h3>
  <?php
  include '../../../config/koneksi.php';
  $id = $_GET['id'];
  $datas = mysqli_query($koneksi, "SELECT * FROM mebel WHERE id='$id'");
  while ($data = mysqli_fetch_array($datas)) {
  ?>
    <form enctype="multipart/form-data" method="post" action="edit_fasilitas_kamar_aksi.php">
      <table>
        <tr>
          <td>Tipe Kamar</td>
          <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
          <td>
            <div class="custom-select">
              <select id="id-tipe-kamar" name="id-tipe-kamar" value="<?php echo $data['id_tipe_kamar']; ?>">
                <?php
                  if ($data['id_tipe_kamar'] == "1") {
                    echo "<option value='1' selected>Deluxe</option>"; 
                  } elseif($data['id_tipe_kamar'] == "2") {
                    echo "<option value='2' selected>Superior</option>"; 
                  }
                ?>
                <option value="1">Tipe Deluxe</option>
                <option value="2">Tipe Superior</option>
              </select>
            </div>
          </td>
        </tr>
        <tr>
          <td>Nama Mebel</td>
          <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
          <td><input type="text" id="nama" name="nama" value="<?php echo $data['nama']; ?>"></td>
        </tr>
        <tr>
          <td>Upload Image File</td>
          <td><input id="gambar" name="gambar" type="file" required/></td>
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