<?php
// nama, jeniskelamin, tanggal, bulan, tahun, alamat
// kemudian untuk dapat menginsert databasenya kita kita lakukan
// koneksi dulu
// kita ambil file koneksi yang pada bab3 telah saya jelaskan
// sebelumnya
include "koneksi.php";

// kemudian kita ambil data-data yang dikirim dari formnya
// di masukkan ke dalam variabel
// ini digunakan untuk memmudahkan proses insert record ke dalam
// database
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];

// untuk dapat menginsertkan tanggal ke dalam database
// terlebih dahulu kita rubaah formatnya menjadi tahun-bulan-tanggal
// seperti ini ...
$tanggallahir = $_POST['tahun'].'-'.$_POST['bulan'].'-'.$_POST['tanggal'];
$alamat = $_POST['alamat'];

// setelah dari situ kemudian kita buat query mysql untuk insert record
// kedalam tbl_mhsiswa
$insert = "insert into tbl_mhsiswa (nama_mhs,jenis_kelamin,tgl_lahir,alamat)
		   values ('$nama', '$jeniskelamin', '$tanggallahir','$alamat');";

// lalu lakukan querynya
$insert_query = mysql_query($insert);

// untuk memberitahukan jika record yang telah berhasil diinsert ke
// dalam database
if($insert_query) 
		{
				echo "Insert Record Berhasil<br>";
				echo "Anda Telah berhasil Menginput data:";
				echo $nama,"<br />",$jeniskelamin,"<br/>",$tanggallahir,"<br/>",$alamat ; 
		}
// namun jika gagal....
else
echo "Gagal Insert Record";
?>
