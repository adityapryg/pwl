<?php

// buat variabel untuk menampung total harga barang (harga barang x kebutuhan)
$tepung_terigu = 7500 * 2.5;
$gula = 9000 * 1.5;
$margaren = 5000 * 2;
$telur = 20000 * 0.5;
$minyak_goreng = 11000 * 2;

// totalkan semua harga barang untuk menemukan total modal yang dikeluarkan dan simpan ke dalam variabel
$modal_yang_dikeluarkan = $tepung_terigu + $gula + $margaren + $telur + $minyak_goreng;

// buat variabel untuk menampung harga donat yang akan dijual
$harga_donat = 2000;

// buat variabel untuk menampung total donat yang terjual
$total_donat_terjual = 50;


/*
 * cara mencari keuntungan yang didapat bu nina :
 * kalikan harga donat dengan total donat terjual setelah itu kurangi dengan modal yang dikeluarkan
*/

$keuntungan_bu_nina = $harga_donat * $total_donat_terjual - $modal_yang_dikeluarkan;
echo "Jadi total keuntungan Bu Nina dalam berjualan donat adalah Rp" . $keuntungan_bu_nina;
?>
