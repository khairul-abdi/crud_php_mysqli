CREATE TABLE `fasilitas_hotel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_fasilitas` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci