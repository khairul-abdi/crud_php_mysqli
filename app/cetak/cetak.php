<?php

require_once '../../mpdf_v8.0.3/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['tempDir' => '/tmp']);
$html = '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="http://localhost/php_crud_hotel_reservation/public/css/style.css">
</head>
<body>
  <div>
    <h1>Hotel Hebat</h1>
    <div>
      <div>
        <p>Tolong CETAK Tiket ini dan bawa ketika CHECK IN di hotel. </p>
      </div>

      <div>
        <table>
          <tr>
            <td>Order ID</td>
            <td>: #4357942</td>
            <td>Tanggal: 12/03/2022</td>
          </tr>
          <tr>
            <td>Nama Tamu</td>
            <td>: Maria Anders</td>
            <td>Konfirmasi</td>
          </tr>
          <tr>
            <td>Negara</td>
            <td>: Indonesia</td>
            <td>Dipesan melalui website</td>
          </tr>
        </table>  
      </div>
      <div>
        <h3>Detail Hotel</h3>
        <table>
          <tr>
            <td>Nama Hotel</td>
            <td>: Hotel Hebat</td>
          </tr>
          <tr>
            <td>Tipe Kamar</td>
            <td>: Deluxe</td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>: Jl. Letsu Medan</td>
          </tr>
          <tr>
            <td>Tgl Masuk</td>
            <td>: 12 Maret 2022</td>
          </tr>
          <tr>
            <td>Tgl Keluar</td>
            <td>: 16 Maret 2022</td>
          </tr>
          <tr>
            <td>Jumlah Kamar</td>
            <td>: 3</td>
          </tr>
          <tr>
            <td>Kasur Ekstra</td>
            <td>: -</td>
          </tr>
          <tr>
            <td>Dewasa</td>
            <td>: 6</td>
          </tr>
          <tr>
            <td>Anak-Anak</td>
            <td>: 4</td>
          </tr>
          <tr>
            <td>Sarapan</td>
            <td>: Ya, Termasuk</td>
          </tr>
        </table>
      </div>
      <div>
        <h3>Metode Pembayaran</h3>
        <table>
          <tr>
            <td>Tipe Pembayaran</td>
            <td>Virtual Account BCA</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output(); 