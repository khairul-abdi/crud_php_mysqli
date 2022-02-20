<?php include "../../templates-admin/header.php"; ?>
<div class="main form-detail">
  <br />
  <a href="resepsionis.php"><i class="fa-solid fa-arrow-left-long"></i> KEMBALI</a>
  <h3>UBAH DATA TAMU</h3>
  <?php
    include '../../config/koneksi.php';
    $id = $_GET['id'];
    $datas = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE id='$id'");
    while($data = mysqli_fetch_array($datas)){
  ?>
  <form method="post" action="edit_aksi.php">
    <table>
      <tr>
        <td>Nama Pemesanan</td>
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <input type="hidden" name="created-at" value="<?php echo $data['created_at']; ?>">
        <td><input type="text" id="nama-pemesanan" name="nama-pemesanan" value="<?php echo $data['nama_pemesan']; ?>"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" id="email" name="email" value="<?php echo $data['email']; ?>"></td>
      </tr>
      <tr>
        <td>No. Handphone</td>
        <td><input type="text" id="no-hp" name="no-hp" value="<?php echo $data['phone']; ?>"></td>
      </tr>
      <tr>
        <td>Nama Tamu</td>
        <td><input type="text" id="nama-tamu" name="nama-tamu" value="<?php echo $data['nama_tamu']; ?>"></td>
      </tr>
      <tr>
        <td>Tipe Kamar</td>
        <td>
          <div class="custom-select">
            <select id="tipe-kamar" name="tipe-kamar" value="<?php echo $data['tipe_fasilitas']; ?>">
              <?php 
                if($data['tipe_fasilitas'] == "deluxe"){ echo "<option value='deluxe' selected>Tipe Deluxe</option>"; }else{ echo "<option value='superior'>Tipe Superior</option>"; }
              ?>
              <option value="deluxe">Tipe Deluxe</option>
              <option value="superior">Tipe Superior</option>
            </select>
          </div>
        </td>
      </tr>
      <tr>
        <td>Check In</td>
        <td>
          <input type="date" class="calender" id="check-in" name="check-in" value="<?php echo $data['check_in']; ?>">
        </td>
      </tr>
      <tr>
        <td>Check Out</td>
        <td>
          <input type="date" class="calender" id="check-out" name="check-out" value="<?php echo $data['check_out']; ?>">
        </td>
      </tr>
      <tr>
        <td>Jumlah Kamar</td>
        <td><input type="text" id="jumlah-kamar" name="jumlah-kamar" value="<?php echo $data['total_kamar']; ?>"></td>
      </tr>
      <tr>
        <td>Status Pemesanan</td>
        <td>
          <div class="custom-select">
            <select id="status-pemesanan" name="status-pemesanan" value="<?php echo $data['status_pemesanan']; ?>">
              <?php 
                if($data['status_pemesanan'] == "terima pesanan"){ 
                  echo "<option value='terima pesanan' selected>Terima Pesanan</option>"; 
                }elseif($data['status_pemesanan'] == "check in"){
                  echo "<option value='check in' selected>Check In</option>"; 
                }elseif($data['status_pemesanan'] == "check out"){
                  echo "<option value='check out' selected>Check Out</option>"; 
                }elseif($data['status_pemesanan'] == "batal pesanan"){
                  echo "<option value='batal pesanan' selected>Batal Pesanan</option>"; 
                }
              ?>
              <option value="terima pesanan">Terima Pesanan</option>
              <option value="check in">Check In</option>
              <option value="check out">Check Out</option>
              <option value="batal pesanan">Batal Pesanan</option>
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
  <?php 
	  }
	?>
</div>
<?php include "../../templates-admin/footer.php"; ?>