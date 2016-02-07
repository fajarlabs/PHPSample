<?php
// kita ambil variable yang di ambil dari form inputan, yakni
// tanggallahir
$tanggallahir = $_POST['tanggal_lahir'];
// kemudian kita buat pola dari tanggal lahir
// apabila kita lihat di sini
/****************************/
// ([0-9]{2})-([0-9]{2})-([0-9]{4}),$Variabel tanggal yang diolah, $Variabel keluaran yang sudah di olah))
/****************************/
// ([0-9]{2})
// kita tahu bahwa tanggal itu memiliki 2 digit yang isinya terdiri
// dari angka 0 - 9
// ([0-9]{2})
// kita tahu bahwa bulan itu memiliki 2 digit yang isinya terdiri dari
// angka 0 - 9
// ([0-9]{4})
// dan untuk tahun itu memiliki 4 digit angka yang terdiri dari angka 0
// - 9
// dan tanda -
// itu membuat tanggalnya nanti memiliki bentuk seperti ini ... xx-xx-
// xxxx
// seperti array Ya?? 
if (!ereg ("([0-9]{2})-([0-9]{2})-([0-9]{4})", $tanggallahir, $bagiantanggal))
				{
					// perintah !ereg digunakan untuk mencocokan tanggallahir
					// apakah sudah sesuai dengan formatnya
					// yang ditentukan
					// dan variable $bagiantanggal ini digunakan untuk
					// memetakan tanggal lahir yang di masukkan ...
					echo "Format yang anda masukkan salah ...";
				}
else
{
// sehingga hasilnya nanti seperti ini ...
echo "Tanggal : $bagiantanggal[1]<br />";
echo "Bulan : $bagiantanggal[2]<br />";
echo "Tahun : $bagiantanggal[3]<br />";
}
?>