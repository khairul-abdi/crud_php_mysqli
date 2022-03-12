CREATE TABLE `transaksi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_pemesan` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `nama_tamu` varchar(255) DEFAULT NULL,
  `tipe_fasilitas` varchar(100) DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `jumlah_kamar` int DEFAULT NULL,
  `status_pemesanan` varchar(100) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4


-- UNTUK SELECT LAST INDEX DI TABLE TRANSAKSI
SELECT id,nama_pemesan, email, phone, nama_tamu, tipe_fasilitas, check_in, check_out, jumlah_kamar, status_pemesanan, created_at, updated_at FROM transaksi ORDER BY id DESC LIMIT 1;
