SELECT mebel.id, 
       tipe_kamar.nama as tipe_kamar, 
       mebel.nama as fasilitas_kamar 
FROM mebel 
LEFT JOIN tipe_kamar 
ON tipe_kamar.id = mebel.id_tipe_kamar 
ORDER BY mebel.id;