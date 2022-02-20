<?php include "../../templates-admin/header.php"; ?>
<div class="main form-detail">
  <br />
  <a href="resepsionis.php"><i class="fa-solid fa-arrow-left-long"></i> KEMBALI</a>
  <h3>TAMBAH DATA TAMU</h3>
  <form method="post" action="tambah_tamu_aksi.php">
    <table>
      <tr>
        <td>Nama Pemesanan</td>
        <td><input type="text" id="nama-pemesanan" name="nama-pemesanan"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" id="email" name="email"></td>
      </tr>
      <tr>
        <td>No. Handphone</td>
        <td><input type="text" id="no-hp" name="no-hp"></td>
      </tr>
      <tr>
        <td>Nama Tamu</td>
        <td><input type="text" id="nama-tamu" name="nama-tamu"></td>
      </tr>
      <tr>
        <td>Tipe Kamar</td>
        <td>
          <div class="custom-select">
            <select id="tipe-kamar" name="tipe-kamar">
              <option selected>Pilih tipe kamar</option>
              <option value="deluxe">Tipe Deluxe</option>
              <option value="superior">Tipe Superior</option>
            </select>
          </div>
        </td>
      </tr>
      <tr>
        <td>Check In</td>
        <td>
          <input type="date" class="calender" id="check-in" name="check-in">
        </td>
      </tr>
      <tr>
        <td>Check Out</td>
        <td>
          <input type="date" class="calender" id="check-out" name="check-out">
        </td>
      </tr>
      <tr>
        <td>Jumlah Kamar</td>
        <td><input type="text" id="jumlah-kamar" name="jumlah-kamar"></td>
      </tr>
      <tr>
        <td>Status Pemesanan</td>
        <td>
          <div class="custom-select">
            <select id="status-pemesanan" name="status-pemesanan">
              <option selected>Status Pemesanan</option>
              <option value="terima">Terima</option>
              <option value="proses">Proses</option>
              <option value="selesai">Selesai</option>
              <option value="batal">Batal</option>
            </select>
          </div>
        </td>
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
<?php include "../../templates-admin/footer.php"; ?>