<?php
  $keyword = $_GET['keyword'];

  if ($keyword == 'search') {
    $query = "SELECT * FROM transaksi WHERE nama_tamu LIKE :keyword OR  nama_pemesan LIKE :keyword";
    
  } elseif($keyword == 'search_by_date') {

  }