<?php
echo "<h2> Belajar PHP itu menyenangkan </h2>";
echo ("Selamat Datang di kelas Sisform! <br>");
echo "ini"."teks"."yang"."dibuat"."terpisah";

// untuk sintaks print
print "<h2>Belajar PHP bersama kelas 2A</h2>";
print "Hello Sisform! <br>";
print "Belajar mencetak teks di browser menggunakan sintaks print! <br>";

// menggunakan echo
$txt = "rudyekoprasetya.wordpress.com";
echo "<br>Belajar PHP di " . $txt . "<br>";

// menggunakan printf
$txt = "rudyekoprasetya.wordpress.com";
printf ("Aku belajar pemrograman PHP di %s <br>", $txt);

// misalkan kita punya bilangan
$harga = 150000;

// jika kita cetak dengan echo
echo "Harganya adalah Rp $harga <br>";

// jika kita cetak dengan printf
printf ("Harganya adalah Rp %.2f <br>", $harga);
?>