<?php
// kita lakukan koneksi terlebih dahulu ...
include "koneksi.php";
// kemudian buat satu query yang akan mengambil id mahasiswa, dan nama
// mahasiswa
// id mahasiswa di ambil sebagai kunci untuk menampilkan detil
// mahasiswa
// jadi detil informasi mahasiswa, berisi nama, alamat, tanggal lahir
// itu akan ditampilkan dengan memanfaatkan idnya nantinya ....
$tampil_nama = "select ID_Mhs, nama_mhs from tbl_mhsiswa";
// kemudian kita jalankan querynya ...
$tampil_nama_query = mysql_query($tampil_nama);
// lalu kita tampilkan isi databasenya
while ($hasil = mysql_fetch_array($tampil_nama_query))
		{
			// lalu kita tampilkan datanya sebagai link url, yang ketika di klik
			// akan menampilkan
			// informasi detil mengenai detil mahasiswa tersebut
			echo "<a href=detail.php?id=".$hasil['ID_Mhs'].">".$hasil['nama_mhs']."</a><br />";
		}
?>