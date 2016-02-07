<?
/* Fungsi dari FOREACH adalah selain perulangan menggunakan for pengulangan yang memang
   dikhususkan untuk array, yakni foreach, dan biasanya foreach
   juga digunakan untuk menampilkan isi dari database. penggunaan foreach sangatlah mudah. 
*/

<?php
// Array yang dimasukkan kedalam variabel $mahasiswa
$mahasiswa = array("Loka Dwiartara","Lakilaki","24/01/1987","B",3.41,"Bot Technology");

// Memberikan nilai variabel kedalam $datamahasiswa
foreach ($mahasiswa as $datamahasiswa)

// Tampilkan semua isi dari array
{
echo $datamahasiswa."<br>";
}
?>