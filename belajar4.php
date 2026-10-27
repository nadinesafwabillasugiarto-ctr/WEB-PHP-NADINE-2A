<?php

// Variabel adalah tempat untuk menyimpan data, variabel diawali dengan tanda $ (dolar) diikuti nama variabel
$nama_barang = "Buku Tulis";
$harga_barang = 5000;
$stok = 100;

// Tipe data
var_dump($nama_barang);
var_dump($harga_barang);
var_dump($stok);

// Menampilkan isi variabel
echo "<br>Nadine membeli $nama_barang seharga Rp $harga_barang dengan jumlah stok $stok <br>";

// menampilkan isi variabel menggunakan petik satu
echo '<br>Nadine membeli ' . $nama_barang . ' seharga Rp ' . $harga_barang . ' dengan jumlah stok ' . $stok . ' <br>';
?>