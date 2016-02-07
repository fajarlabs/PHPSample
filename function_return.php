<?php
/*
Mengembalikan Nilai Fungsi
Mengembalikan nilai fungsi dilakukan jika anda menginginkan nilai dari fungsi tersebut
di olah dalam suatu variable tertentu. Nah biasanya nilai dalam variable nantinya akan
digunakan oleh fungsi yang lain. Untuk mengembalikan nilai fungsi, digunakan suatu
fungsi return. Contoh implementasinya :

Inti dari return yaitu : fungsi ini digunakan berulang kali, return yaitu mengembalikan
fungsi tersebut ke 0 atau dikembalikan ke memori.
*/

function penjumlahan($nilai1, $nilai2)
	{
		$total = $nilai1+$nilai2;
		return $total; // kembali ke kosong
	}
// Fungsi digunakan pertama
$jumlah20plus30 = penjumlahan(30,20);
echo $jumlah20plus30."<br>";

// Fungsi digunakan kedua
$jumlah20plus20 = penjumlahan(20,20);
echo $jumlah20plus20;
?>