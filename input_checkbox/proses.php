
<?php
// kita awali dengan tag php
// kemudian kita coba dengan
// menampilkan isi, dengan memanggil attribut namenya yakni lulus
//echo $_POST['lulus'][0];
?>

<!--
kita coba lihat di browser, dan ceklis yang paling pertama itu yang ditampilkan, nah
sekarang bagaimana jika kita ingin menampilkan semua yang terpilih atau terceklis ? -->
<?php
// pertama adalah kita menghitung berapa jumlah checkbox yang
// terpilih??
$jumlah_terpilih = count($_POST['lulus']);
// kita bisa tampilkan berapa yang terpilih dengan memanfaatkan echo
echo $jumlah_terpilih ;
?>

<!-- Langkah selanjutnya adalah kita melakukan looping sebanyak ceklis yang terpilih
caranya?? buka kembali file tadi -->

<?php
$jumlah_terpilih = count($_POST['lulus']);
// kemudian ganti dengan looping
// lakukan pengulangan mulai dari 0, sampai kurang dari jumlah dari
// ceklis yang terpilih
// kemudian lakukan penambahan satu demi satu sampai pengulangannya
// selesai
$jumlah_terpilih = $jumlah_terpilih - 1;
for ($x=0; $x<=$jumlah_terpilih; $x++)
	{
		// kemudian tampilkan isinya dengan menyebut methode, atribut
		// name, dan arraynya
		echo $_POST['lulus'][$x];
	}
?>