<?php
// MEMBUAT FUNGSI
//membuat function
// function salam(){
//     echo "<h3>Assalamualaikum, </h3>";
//     echo "Perkenalkan, nama saya Nadine<br/>";
// }
 
// memanggil function
salam();

// FUNGSI DENGAN PARAMETER
//membuat function
function salam(){
    echo "<h3>Assalamualaikum, </h3>";
    echo "Perkenalkan, nama saya Nadine<br/>";
}
 
function kenalan($nama,$asal) {
    echo "<h3>Halo Nama saya $nama </h3>";
    echo "Saya dari $asal <br>";
}
 
//memanggil function salam
salam();
 
$siswa="Nadine";
$dari="kediri";
 
//memanggil function kenalan
kenalan($siswa,$dari);

//  FUNGSI YANG MENGEMBALIKAN NILAI
// membuat fungsi hitung umur
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
  }
   
echo "Umur saya adalah ". hitungUmur(2007, 2026) ." tahun";

// FUNGSI YANG MEMANGGIL FUNGSI LAIN
//memanggil function salam
salam();
 
$siswa="Inez";
$dari="kediri";
 
//memanggil function kenalan
kenalan($siswa,$dari);
?>