<?php

// VARIABEL adalah tempat untuk menyimpan data, variabel diawali dengan tanda $ (dolar) diikuti nama variabel
$nama_barang = "Buku Tulis";
$harga_barang = 5000;
$stok = 100;

// TIPE DATA
var_dump($nama_barang);
var_dump($harga_barang);
var_dump($stok);

// Menampilkan isi variabel
echo "<br>Nadine membeli $nama_barang seharga Rp $harga_barang dengan jumlah stok $stok <br>";

// menampilkan isi variabel menggunakan petik satu
echo '<br>Nadine membeli ' . $nama_barang . ' seharga Rp ' . $harga_barang . ' dengan jumlah stok ' . $stok . ' <br>';

// KONSTANTA adalah tempat untuk menyimpan data yang nilainya tidak dapat diubah, konstanta diawali dengan huruf kapital
// membuat konstanta menggunakan define()
define('VERSION', '1.0.0');

const AUTHOR = "Nadine Safwa Billa Sugiarto";
const BASE_URL = "https://github.com/nadinesafwabillasugiarto-ctr/WEB-PHP-NADINE-2A";

// cetak nilai konstanta
echo "AUTHOR: " . AUTHOR . "<br>";
echo "URL: " . BASE_URL . "<br>";
echo "VERSION: " . VERSION . "<br>";
?>