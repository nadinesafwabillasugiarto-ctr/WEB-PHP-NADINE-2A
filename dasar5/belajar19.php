<?php
$daftar_mahasiswa = [
    "Nadine",
    "Athala",
    "Inez",
    "Danil",
    "Regita",
];
 
echo "<h3>Daftar Nama Mahasiswa</h3>";
echo "<ul>";
 
foreach($daftar_mahasiswa as $mahasiswa){
    echo "<li>$mahasiswa</li>";
}
 
echo "</ul>";
 
?>