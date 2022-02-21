<?php include "../../../templates-admin/header.php"; ?>
<div class="main form-detail">
  <br />
  <a href="../fasilitas_kamar_dan_tipe_kamar.php"><i class="fa-solid fa-arrow-left-long"></i> KEMBALI</a>
  <h3>TAMBAH DATA KAMAR</h3>
  <form enctype="multipart/form-data" method="post" action="tambah_fasilitas_kamar_aksi.php">
    <table>
      <tr>
        <td>Tipe Kamar</td>
        <td>
          <div class="custom-select">
            <select id="id-tipe-kamar" name="id-tipe-kamar">
              <option selected>Pilih tipe kamar</option>
              <option value="1">Tipe Deluxe</option>
              <option value="2">Tipe Superior</option>
            </select>
          </div>
        </td>
      </tr>
      <tr>
        <td>Nama Mebel</td>
        <td><input type="text" id="nama" name="nama"></td>
      </tr>
      <tr>
        <td>Upload Image File</td>
        <td><input id="gambar" name="gambar" type="file"/></td>
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
</div>
<?php include "../../../templates-admin/footer.php"; ?>