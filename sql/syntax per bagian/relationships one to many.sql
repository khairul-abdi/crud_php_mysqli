-- Untuk fasilitas_kamar_dan_tipe_kamar.php
SELECT mebel.id, 
       tipe_kamar.nama as tipe_kamar, 
       mebel.nama as fasilitas_kamar 
FROM mebel 
LEFT JOIN tipe_kamar 
ON tipe_kamar.id = mebel.id_tipe_kamar 
ORDER BY mebel.id;

-- Untuk mendapatkan data fasilitas dari detail_tipe_kamar.php
SELECT mebel.nama as fasilitas_kamar,
FROM mebel 
LEFT JOIN tipe_kamar 
ON tipe_kamar.id = mebel.id_tipe_kamar 
WHERE tipe_kamar.id=1;


-- Untuk mendapatkan data slide show gambar dari detail_tipe_kamar.php

SELECT  mebel.id, 
        mebel.nama as fasilitas_kamar,
        mebel.tipe_gambar,
        mebel.data_gambar 
FROM mebel 
LEFT JOIN tipe_kamar 
ON tipe_kamar.id = mebel.id_tipe_kamar 
WHERE tipe_kamar.id=2;


