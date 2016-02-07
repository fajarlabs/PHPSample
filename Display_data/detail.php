<?php
// pertama adalah kita lakukan koneksi terlebih dahulu
// antara php dan mysql
include "koneksi.php";

/*********************/
$id = $_REQUEST['id']; // kemudian kita ambil nilai id yang ada pada url
/*********************/

// lalu kita buat query yang hanya dapat menampilkan informasi
// mahasiswa yang kita klik saja
$detail = "select * from tbl_mhsiswa where ID_Mhs='$id'";
// kita jalankan querynya
$detail_query = mysql_query($detail);
while ($hasil = mysql_fetch_array($detail_query))
		{
			// lalu kita masukkan kedalam variable untuk mempermudah dalam
			// menampilkan data
			$nama = $hasil['nama_mhs'] ;
			$jenis_kelamin = $hasil['jenis_kelamin'];
			$tanggal_lahir = $hasil['tgl_lahir'];
			$alamat = $hasil['alamat'];
			// kemudian kita sisipkan data yang akan ditampilkan dalam satu
			// variable
			$data_lengkap = "Nama : ".$nama."<br />";
			$data_lengkap .= "Jenis Kelamin : ".$jenis_kelamin."<br />";
			// tanda titik ini berguna untuk menambahkan isi variable yang
			// sebelumnya agar tidak tertimpa
			// melainkan hanya menambahkan saja, dan tidak ditampilkan, namun akan
			// di tampilkan
			// di akhir dari coding halaman ini ...
			$data_lengkap .= "Tanggal Lahir : ".$tanggal_lahir."<br />";
			$data_lengkap .= "Alamat : ".$alamat."<br />";
		}
// kemudian tampilkan semua informasi detil.
// echo "Informasi Detil mengenai <strong>$nama</strong> adalah : <br/>".$data_lengkap;
?>

<html>
<head>
<title><?php echo "Informasi ".$nama ; ?></title>
</head>
<body>
<?php echo "Informasi Detail mengenai <strong>".$nama."</strong> adalah : <br />".$data_lengkap; ?>
</body>
</html>