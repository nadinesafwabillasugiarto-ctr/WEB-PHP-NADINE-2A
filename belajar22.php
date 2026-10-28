<?php
// // membuat array asosiatif
// $artikel = [
//     "judul" => "Modul 2 - PHP Dasar",
//     "penulis" => "Nadine Safwabilla",
//     "jumlah_halaman" => 35
// ];

// membuat array aosiatif dengan tanda =
// membuat array asosiatif
$artikel = [
    "judul" = "Modul 2 - PHP Dasar",
    "penulis" = "Nadine Safwabilla",
    "jumlah_halaman" = 35
];
 
// mencetak isi array assosiatif
echo "<h2>".$artikel["judul"]."</h2>";
echo "<p>Penulis: ".$artikel["penulis"]."</p>";
echo "<p>Jumlah Halaman: ".$artikel["jumlah_halaman"]."</p>";
?>