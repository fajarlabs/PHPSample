<?php
// kita lakukan koneksi dulu seperti biasanya ...
include "koneksi.php";

// buat query yang dapat menampilkan semua isi tbl_daftar_mahasiswa
$select = "select * from tbl_daftar_mahasiswa order by id_daftar desc";

// jadikan variable $select itu menjadi query yang siap di eksekusi
// oleh mysql
$select_query = mysql_query($select);
?>
<html>
<head>
<title>Latihan BAB 6 - Select Record</title>
</head>
<body>
<!-- pembuatan table sebelumnya telah saya jelaskan... -->
<table style="font-size:11px;font-family:'arial';text-align:center;" border='1' width="80%" align='center' >
<caption>
	<h1>Daftar Calon Mahasiswa Baru</h1>
</caption>
<tr>
	<th>No</th>
	<th>Tanggal</th>
	<th>Nama</th>
	<th>Jenis Kelamin</th>
	<th>Status</th>
	<th>Lulusan</th>
	<th>Tahun</th>
	<th>Pekerjaan</th>
	<th>Alamat</th>
	<th>Kelurahan</th>
	<th>Kecamatan</th>
	<th>Kota</th>
	<th>Provinsi</th>
	<th>Telepon</th>
	<th>Action</th></tr>
<?php
$select_query = mysql_query('select * from daftar');
// kemudian kita tampilkan isi yang berada dalam database tadi ...
while($select_result = mysql_fetch_array($select_query))
		{
			// kita ambil saatu persatu field yang berada dalam tbl_daftar_mahasiswa tadi ...
			$id = $select_result['id_daftar'] ;
			$tanggaldaftar = $select_result['tgl_daftar'] ;
			$nama = $select_result['nm_pendaftar'] ;
			$jeniskelamin = $select_result['jns_kelamin'] ;
			$status = $select_result['status'] ;
			$lulusan = $select_result['lulusan_sekolah'] ;
			$tahunajaran = $select_result['tahun_ajaran'] ;
			$pekerjaan = $select_result['pekerjaan'] ;
			$alamat = $select_result['alamat'] ;
			$kelurahan = $select_result['kelurahan'] ;
			$kecamatan = $select_result['kecamatan'] ;
			$kota = $select_result['kota'] ;
			$provinsi = $select_result['provinsi'] ;
			$telepon = $select_result['telp'] ;
			// lalu kita tampilkan dalam bentuk table yang dinamis ke bawah
			// caranya adalah dengan menampilkan isi variable didalam tag-tag td
			echo " <tr>
						<td>".$id."</td>
						<td>".$tanggaldaftar."</td>
						<td>".$nama."</td>
						<td>".$jeniskelamin."</td>
						<td>".$status."</td>
						<td>".$lulusan."</td>
						<td>".$tahunajaran."</td>
						<td>".$pekerjaan."</td>
						<td>".$alamat."</td>
						<td>".$kelurahan."</td>
						<td>".$kecamatan."</td>
						<td>".$kota."</td>
						<td>".$provinsi."</td>
						<td>".$telepon."</td>".
						  /* kemudian kita siapkan sebuah form yang nantinya digunakan untuk
							 menjalankan aksi update dan delete
							 kita buat actionnya itu menuju url yang nanti url tersebut digunakan
							 untuk variable untuk
							 membantu aksi selanjutnya ...
							 lihat di sebelah sini ... hasilnya nanti adalah action.php?id=xx ...
							 nah id xx inilah yang nantinya
							 akan kita gunakan untuk membantu aksi selanjutnya seperti proses
						     delete, atau pun edit ... */
							 
						"<td><form method=\"POST\" action=\"action_request.php?id=$id\">
							<input type=\"hidden\" value=\"$id\" name=\"id\">"
							//kita buat button untuk update
							."<input type=\"submit\" name=\"action\" value=\"Edit\"><br/>"
							//dan kita buat button untuk delete recordnya
							//titik adalah pembatas antara tag html dengan html lainnya setelah disisipi kode lain seperti
							//"kode HTML"."kode PHP" jadi kalau kosong disarankan menambahkan titik seperti ""."" (titik batas)
							."<input type=\"submit\" name=\"action\" value=\"Hapus\">
							
							</form>
						</td>
				   </tr>";
}
?>
</table>
</body>
</html>