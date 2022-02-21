<?php include "../../../templates-admin/header.php"; ?>
<div class="main form-detail">
  <br />
  <a href="../fasilitas_kamar_dan_tipe_kamar.php"><i class="fa-solid fa-arrow-left-long"></i> KEMBALI</a>
  <h3>TAMBAH DATA KAMAR</h3>
  <form method="post" action="tambah_tipe_kamar_aksi.php">
    <table>
      <tr>
        <td>Tipe Kamar</td>
        <td><input type="text" id="tipe-kamar" name="tipe-kamar"></td>
      </tr>
      <tr>
        <td>Jumlah Kamar</td>
        <td><input type="text" id="jumlah-kamar" name="jumlah-kamar"></td>
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