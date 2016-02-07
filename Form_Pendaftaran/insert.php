
<?php
// kita koneksikan dulu dengan file koneksi.php
include "koneksi.php";
// kemudian kita buat variable-variable yang akan kita masukkan ke
// dalam database nanti
// diambil dari form inputan ...
$tanggal_daftar = date("Y-n-d");
$nama 			= $_POST['nama'];
$tgl_lahir 		= $_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
$jenis_kelamin	= $_POST['jenis_kelamin'];
$status 		= $_POST['status'];
$sekolah 		= $_POST['sekolah'];
$tahun_ajaran 	= $_POST['tahun_ajaran'];
$pekerjaan 		= $_POST['pekerjaan'];
$alamat 		= $_POST['alamat'];
$kelurahan 		= $_POST['kelurahan'];
$kecamatan 		= $_POST['kecamatan'];
$kota 			= $_POST['kota'];
$provinsi 		= $_POST['provinsi'];
$telepon 		= $_POST['telepon'];
// buat query untuk memasukkan hasil inputan tadi ke dalam database
$query_insert = "insert into daftar(tgl_daftar,nm_pendaftar,tgl_lahir, jns_kelamin, status, lulusan_sekolah, 
									tahun_ajaran,pekerjaan, alamat, kelurahan, kecamatan, kota, provinsi, telp)
				values(	'$tanggal_daftar', '$nama','$tgl_lahir', '$jenis_kelamin', '$status',
						'$sekolah', '$tahun_ajaran', '$pekerjaan', '$alamat',
						'$kelurahan','$kecamatan', '$kota', '$provinsi','$telepon');";
// jika user mengosongkan nama
// ini juga berlaku jika anda mengosongkan semuanya ...
// yang pertama kali di cek adalah bagian ini ...
if (empty($_POST['nama']))
		{
			echo "Anda mengosongkan Nama...";
		}
// jika user mengosongkan jenis kelamin
else if (empty($_POST['jenis_kelamin']))
		{
			echo "Anda mengosongkan jenis kelamin...";
		}
// jika user mengosongkan alamat
else if (empty($_POST['alamat']))
		{
			echo "Anda mengosongkan alamat";
		}
// ini berarti mengosongkan nomor telepon
else if (empty($_POST['telepon']))
		{
			echo "Anda mengosongkan no telepon ... ";
		}
else
		{
			// lalu jalankan querynya untuk langsung dapat memasukkannya kedalam
			// database.
			$insert = mysql_query($query_insert);
			// apabila query insert berjalan dengan baik,
			if($insert)
						{
							// maka
							echo "Data anda telah di input ke dalam database ...";
						}
							// jika querynya gagal, atau ada yang tidak beres dengan koneksi antara
							// php dan mysql
			else
						{
							// maka
							echo "Gagal insert database ... ";
							echo "Semua terisi dan proses input ke database bisa di lakukakan disini ... ";
						}
        }


?>