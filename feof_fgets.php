<?php
/*
Membaca File dengan feof() dan fgets()
Oke kita akan coba langsung mengimplementasikan fopen(), feof(), dan fgets() secara
bersamaan untuk membaca isi suatu file.
*/

$file = "tes.txt";
$fileopen = fopen($file, 'r') or die ("Nggak bisa di baca");
while (!feof($fileopen))
	{
		$bariskalimat = fgets($fileopen, 1024);
		echo $bariskalimat."<br>";
	}
	
/* PENJELASAN
hal yang pertama di lakukan adalah membuka file tersebut dengan fopen($file, 'r'), r itu
parameter untuk membaca saja dan meletakkan kursor atau pointer di awal dari file. Jika
file tidak bisa dibaca akan muncul error dengan peringatan "Nggak bisa dibaca".
*********************
while (!feof($fileopen))
********************* 
memiliki fungsi untuk mengecek apakah pointer atau kursornya
berada pada akhir file. parameter r pada fopen meletakkan kursor di awal, dan 
*********************
while (!feof($fileopen)) 
*********************
akan terus mengecek apakah kursornya sudah sampai akhir file, jika
sudah sampai akhir file maka pengulangan akan berhenti.
*********************
$bariskalimat = fgets($fileopen, 1024);
*********************
berfungsi untuk mengambil isi dari file baris demi baris menggunakan memory 1024 byte
kemudian di tampilkan dengan ;
*********************
echo $bariskalimat."<br>";
*********************
ilustrasinya adalah seperti ini ... logika membuka file
paramater r, pada fopen($file, 'r') berfungsi untuk meletakkan kursor di awal dari file.

feof mengecek apakah sudah berada di akhir file ...
fgets mengambil isi file dan mengambil baris pertama ...
fopen kemudian mengcek apakah sudah berada di akhir file?
fgets mengambil isi file dan mengambil baris kedua...
fopen kemudian mengcek apakah sudah berada di akhir file?
?>