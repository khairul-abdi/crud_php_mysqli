<?php
include "../../templates-admin/header.php";
require_once '../../alert/alert.php';

if (!session_id()) {
  session_start();
}
?>

<div>
  <h1>BAGIAN SLIDE FASILITAS SEMUA FOTO TERBAIK HOTEL</h1>
</div>

<div>
  <?php flash('greeting'); ?>
</div>

<div>
  <form method="post" action="home_aksi.php">
    <table>
      <thead>
        <tr>
          <th>Tanggal check in</th>
          <th>Tanggal check out</th>
          <th>Tanggal Jumlah Kamar</th>
          <th> </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <input type="date" id="check-in" name="check-in">
          </td>
        </tr>
        <tr>
          <td>
            <input type="date" id="check-out" name="check-out">
          </td>
        </tr>
        <tr>
          <td><input type="text" id="jumlah-kamar" name="jumlah-kamar"></td>
        </tr>
        <tr>
          <!-- Trigger/Open The Modal -->
          <td><button type="button" style="
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
        " id="myBtn">Pesan</button></td>
        </tr>
      </tbody>
    </table>

    <div>
      <a href="../../cetak/cetak.php">Cetak</a>
      <h1>TENTANG KAMI</h1>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti mollitia excepturi dolor, voluptatem, ab tempora quae saepe vel illum error laudantium in beatae tempore qui reiciendis commodi explicabo, magni molestias odit accusamus voluptatibus! Accusamus voluptas dicta id voluptatum, quas sequi magni, saepe nihil iure exercitationem voluptates dolore expedita! Perspiciatis explicabo non nostrum. Harum, alias beatae ipsam illo explicabo exercitationem modi eius sit tempora quas, odit voluptatum consectetur eveniet facilis voluptas delectus est maiores? Temporibus eos in voluptate magni, pariatur, praesentium distinctio quas nam quidem modi fugit? A quas, iure officia hic aliquam ex beatae iste quasi illo necessitatibus nobis. Aliquam.</p>
    </div>



    <!-- The Modal -->
    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
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
        " id="myBtnTiket">Konfirmasi Pemesanan</button></td>
          </tr>
        </table>
      </div>
    </div>

  </form>
</div>

<?php include "../../templates-admin/footer.php"; ?>