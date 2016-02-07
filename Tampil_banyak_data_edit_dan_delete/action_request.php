<?php
// Kita melakukan koneksi terlebih dahulu
include "koneksi.php";
// pertama kita ambil aksinya, hal ini diambil berdasarkan dari action
// form sebelumnya
// kemudian kita jadikan huruf kecil semua dengan strtolower()
// apapun yang diinputkan menjadi kecil semua
$action = strtolower($_POST['action']);
// kita ambil url id nya dengan
// Ini adalah cara cepat untuk mengambil nilai variabel pada sebuah URL dalam kasus ini yang kita ambil adalah
// nilai variabel dari id
// Link seperti berikut ini : http://localhost/function/input_database/action.php?id=2
$id = $_REQUEST['id'];
// lalu kita cocokkan ketika tombol delete yang ditekan
if ($action == "hapus")
		{
			// maka
			echo "Anda memilih aksi delete pada record $id... <br/>";
			// buat querynya untuk mendelete record mahasiswa yang memiliki
			// id yang akan di delete
			$delete = "delete from daftar where id_daftar ='$id'";
			// jalankan querynya
			$delete_query = mysql_query($delete);
			// jika querynya berhasil maka record berhasil di hapus
			if ($delete_query) 
					{
							echo "Record $id berhasil dihapus ...";
					}
			else 	
					{
					echo "Gagal menghapus record";
					}
		} else
				{
					echo "Anda memilih aksi update...";
					// buat query untuk menampilkan record yang dipilih ...
					$select = "select * from daftar where id_daftar = '$id'";
					$select_query = mysql_query($select);
					// lalu sisipkan field yang akan ditampilkan ke dalam variable...
					while($select_result = mysql_fetch_array($select_query))
							{
								$id = $select_result['id_daftar'] ;
								$nama = $select_result['nm_pendaftar'] ;
								$tanggal = $select_result['tgl_daftar'];
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
							}
?>
							
<head><title>Form Edit</title></head>
<body>
<form action="insert.php" method="POST">
<table border='1' width='35%' cellpadding='2' cellspacing='2' align='center'>
<caption><h2>Formulir Pendaftaran Mahasiswa Baru</h2></caption>
<tr>
	<td>Nama</td><td><input type="text" name="nama" value="<?php echo $nama ; ?>" size="30" maxlength="50"/></td>
</tr>
</tr>
<tr>
	<td>Tanggal lahir</td><td>
		<select name="tanggal">
			<option value="01">1</option>
			<option value="02">2</option>
			<option value="03">3</option>
			<option value="04">4</option>
			<option value="05">5</option>
			<option value="06">6</option>
			<option value="07">7</option>
			<option value="08">8</option>
			<option value="09">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
</select>
/<select name="bulan">
			<option value="01">Januari</option>
			<option value="02">Februari</option>
			<option value="03">Maret</option>
			<option value="04">April</option>
			<option value="05">Mei</option>
			<option value="06">Juni</option>
			<option value="07">Juli</option>
			<option value="08">Agustus</option>
			<option value="09">September</option>
			<option value="10">Oktober</option>
			<option value="11">November</option>
			<option value="12">Desember</option>
</select>
/<select name="tahun">
			<option value="1980">1980</option>
			<option value="1981">1981</option>
			<option value="1982">1982</option>
			<option value="1983">1983</option>
			<option value="1984">1984</option>
			<option value="1985">1985</option>
			<option value="1986">1986</option>
			<option value="1987">1987</option>
			<option value="1988">1988</option>
			<option value="1989">1989</option>
			<option value="1990">1990</option>
			<option value="1991">1991</option>
			<option value="1992">1992</option>
			<option value="1993">1993</option>
			<option value="1994">1994</option>
			<option value="1995">1995</option>
			<option value="1996">1996</option>
			<option value="1997">1997</option>
			<option value="1998">1998</option>
			<option value="1999">1999</option>
			<option value="2000">2000</option>
			<option value="2001">2001</option>
			<option value="2002">2002</option>
			<option value="2003">2003</option>
			<option value="2004">2004</option>
</select>
</td></tr>
<tr>
	<td>Jenis Kelamin</td>
	<td><input type="radio" name="jenis_kelamin" value="pria"/> <label for="jenis_kelamin">Pria</label>
		<input type="radio" name="jenis_kelamin" value="wanita"/><label for="jenis_kelamin">Wanita</label>
	</td>
</tr>
<tr>
	<td>Status</td>
	<td>
		<select name="status">
				<option value="Pilih Status Anda">Pilih Status Anda</option>
				<option value="menikah">Menikah</option>
				<option value="single">Single</option>
		</select>
	</td>
</tr>
<tr>
	<td>Lulusan Sekolah</td>
	<td><input type="text" name="sekolah" value=<?php echo $lulusan; ?> size="30" maxlength="50"/></td>
</tr>
<tr>
	<td>Tahun Ajaran</td>
		<td>
			<select name="tahun_ajaran">
				<option>Pilih Tahun Ajaran</option>
				<option value="1995">1995</option>
				<option value="1996">1996</option>
				<option value="1997">1997</option>
				<option value="1998">1998</option>
				<option value="1999">1999</option>
				<option value="2000">2000</option>
				<option value="2001">2001</option>
				<option value="2002">2002</option>
				<option value="2003">2003</option>
				<option value="2004">2004</option>
				<option value="2005">2005</option>
				<option value="2006">2006</option>
				<option value="2007">2007</option>
				<option value="2008">2008</option>
				<option value="2009">2009</option>
				<option value="2010">2010</option>
			</select>
		</td>
</tr>
<tr>
	<td>Pekerjaan</td><td><input type="text" name="pekerjaan" value="<?php echo $pekerjaan; ?>" size="30" maxlength="50"/></td>
</tr>
<tr>
	<td>Alamat</td><td><textarea name="alamat" cols="30" rows="4"><?php echo $alamat; ?></textarea></td>
</tr>
<tr>
	<td>Kelurahan</td><td><input type="text" name="kelurahan" value=<?php echo $kelurahan; ?> size="30" maxlength="50"/></td>
</tr>
<tr>
	<td>Kecamatan</td><td><input type="text" name="kecamatan" value=<?php echo $kecamatan; ?> size="30" maxlength="50"/></td>
</tr>
<tr>
	<td>Kota</td><td><input type="text" name="kota" value=<?php echo $kota ;?> size="30" maxlength="50"/></td>
</tr>
<tr>
	<td>Provinsi</td>
		<td>
			<select name="provinsi">
				<option value="Pilih Provinsi Anda">Pilih Provinsi Anda</option>
				<option value="Bali">Bali</option>
				<option value="Bangka Belitung">Bangka Belitung</option>
				<option value="Banten">Banten</option>
				<option value="Bengkulu">Bengkulu</option>
				<option value="Gorontalo">Gorontalo</option>
				<option value="Irian Jaya Barat">Irian Jaya Barat</option>
				<option value="Jabotabekdecipsawcib">Jabotabekdecipsawcib</option>
				<option value="Jambi">Jambi</option>
				<option value="Jawa Barat">Jawa Barat</option>
				<option value="Jawa Tengah">Jawa Tengah</option>
				<option value="Jawa Timur">Jawa Timur</option>
				<option value="Kalimantan Barat">Kalimantan Barat</option>
				<option value="Kalimantan Selatan">Kalimantan Selatan</option>
				<option value="Kalimantan Tengah">Kalimantan Tengah</option>
				<option value="Kalimantan Timur">Kalimantan Timur</option>
				<option value="Kepulauan Riau">Kepulauan Riau</option>
				<option value="Lampung">Lampung</option>
				<option value="Lokasi Lain-lain">Lokasi Lain-lain</option>
				<option value="Maluku">Maluku</option>
				<option value="Maluku Utara">Maluku Utara</option>
				<option value="Nangroe Aceh Darussalam">Nangroe Aceh Darussalam</option>
				<option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
				<option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
				<option value="Papua">Papua</option>
				<option value="Riau">Riau</option>
				<option value="Sulawesi Barat">Sulawesi Barat</option>
				<option value="Sulawesi Selatan">Sulawesi Selatan</option>
				<option value="Sulawesi Tengah">Sulawesi Tengah</option>
				<option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
				<option value="Sulawesi Utara">Sulawesi Utara</option>
				<option value="Sumatera Barat">Sumatera Barat</option>
				<option value="Sumatera Selatan">Sumatera Selatan</option>
				<option value="Sumatera Utara">Sumatera Utara</option>
				<option value="Yogyakarta">Yogyakarta</option>
			</select>
	</td>
</tr>
<tr>
	<td>No Telepon</td>
	<td><input type="text" name="telepon" value=<?php echo $telepon; ?> size="30" maxlength="50"/></td>
</tr>
<tr>
	<td></td><td><input type="submit" name="kirim" value="Daftar!"/></td>
</tr>
</table>
</form>
</body>
</html>
<?php
				}
?>

<!--jika bukan tombol delete yang ditekan Kita lihat di browser. -->