<?php
// membuat array kosong
$mahasiswa = array();
$kelas = [];
 
// membuat array sekaligus mengisinya
$mahasiswa = array("Nadine", "Athala", "Inez", "Danil");
$kelas = [1, 2, 3, 4];
 
// membuat array dengan mengisi indeks tertentu
$mahasiswa[0] = "Fensa";
$mahasiswa[1] = "Titania";
$mahasiswa[2] = "Regita";
 
var_dump($mahasiswa);
echo "<br>";
var_dump($kelas);
 
?>