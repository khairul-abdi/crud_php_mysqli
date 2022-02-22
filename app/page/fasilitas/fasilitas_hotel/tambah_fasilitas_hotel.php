<?php include "../../../templates-admin/header.php"; ?>
<div class="main form-detail">
  <br />
  <a href="fasilitas_hotel.php"><i class="fa-solid fa-arrow-left-long"></i> KEMBALI</a>
  <h3>TAMBAH DATA KAMAR</h3>
  <form enctype="multipart/form-data" method="post" action="tambah_fasilitas_hotel_aksi.php">
    <table>
      <tr>
        <td>Nama Fasilitas</td>
        <td><input type="text" id="nama-fasilitas" name="nama-fasilitas"></td>
      </tr>
      <tr>
        <td>Upload Image File</td>
        <td><input id="gambar" name="gambar" type="file" /></td>
      </tr>
      <tr>
        <td>Status</td>
        <td>
          <div class="custom-select">
            <select id="status" name="status">
              <option selected>Pilih Status</option>
              <option value="bagus">Bagus</option>
              <option value="rusak">Rusak</option>
              <option value="perbaikan">Perbaikan</option>
            </select>
          </div>
        </td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td><input type="text" id="keterangan" name="keterangan"></td>
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