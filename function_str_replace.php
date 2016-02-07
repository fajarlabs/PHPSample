<!-- Menggunakan STR_REPLACE Bagaimana jika anda ingin melakukan manipulasi dari suatu string. Misalkan ingin
menimpa suatu kata dengan kata yang lain, misalkan mengubah kata bermain dalam
kalimat "saya sedang bermain" menjadi "saya sedang belajar". Anda dapat
memanfaatkan str_replace(); contoh penggunaanya adalah seperti ini 

str_replace("kata/karakter asli", "kata/karakter yang baru","kalimat");

Cara implementasinya sebagai berikut :
-->

<?php
$kalimat = "saya sedang bermain";
$kalimatbaru = str_replace("bermain", "belajar", $kalimat);
echo $kalimatbaru ;
?>