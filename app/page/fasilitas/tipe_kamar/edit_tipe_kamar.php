<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: http://localhost/php_crud_hotel_reservation/app/page/login/login.php");
  exit;
}

include "../../../templates-admin/header.php";

?>
<div class="main form-detail">
  <br />
  <a href="fasilitas_kamar_dan_tipe_kamar.php"><i class="fa-solid fa-arrow-left-long"></i> KEMBALI</a>
  <h3>UBAH FASILITAS KAMAR</h3>
  <?php
  include '../../../config/koneksi.php';
  $id = $_GET['id'];
  $datas = mysqli_query($koneksi, "SELECT * FROM tipe_kamar WHERE id='$id'");
  while ($data = mysqli_fetch_array($datas)) {
  ?>
    <form method="post" action="edit_tipe_kamar_aksi.php">
      <table>
        <tr>
          <td>Tipe Kamar</td>
          <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
          <td><input type="text" id="tipe-kamar" name="tipe-kamar" value="<?php echo $data['nama']; ?>"></td>
        </tr>
        <tr>
          <td>Total Kamar</td>
          <td><input type="text" id="total-kamar" name="total-kamar" value="<?php echo $data['total_kamar']; ?>"></td>
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