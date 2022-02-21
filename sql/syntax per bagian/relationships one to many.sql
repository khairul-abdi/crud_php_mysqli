-- Untuk fasilitas_kamar_dan_tipe_kamar.php
SELECT mebel.id, 
       tipe_kamar.nama as tipe_kamar, 
       mebel.nama as fasilitas_kamar 
FROM mebel 
LEFT JOIN tipe_kamar 
ON tipe_kamar.id = mebel.id_tipe_kamar 
ORDER BY mebel.id;

-- Untuk mendapatkan data dari detail_tipe_kamar.php
SELECT  mebel.nama as fasilitas_kamar 
FROM mebel 
LEFT JOIN tipe_kamar 
ON tipe_kamar.id = mebel.id_tipe_kamar 
WHERE tipe_kamar.id=1;

