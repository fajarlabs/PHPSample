<html>
<head>
<title> HAPUS DATA DENGAN JAVASCRIPT </title>
</head>
<table width="400" border="1">
	 <!-- Membuat Field Headernya -->
	<tr>
	 <td colspan="3" bgcolor="#00CCFF"
	 <b> Data Pribadi </b>
	 </tr>
	 
	 <!-- Membuat Field table nya -->
	 <tr>
		<td width="60"><b>NIK</b></td>
		<td width="251"><b>NAMA PRIBADI </b></td>
		<td width="67" align="center"><b>HAPUS</b></td>
	</tr>
	
	<!-- Tampilkan DATA -->
	<!-- Dengan menggunakan fungsi perulangan while -->
	<?php
		// Lakukan inisialisasi Koneksi ke MySQL
		mysql_connect("localhost","root","");
		// Inisialisasi Pilih database
		mysql_select_db("db_karyawan");
		// Inisialisasi query pemilihan tabel karyawan
		$sql_karyawan="SELECT * FROM tbl_karyawan";
		// Inisialisasi query 
		$qry_karyawan=mysql_query($sql_karyawan) or die ("Gagal menampilkan".mysql_error());
		
		// Menggunakan perulangan while
		// MySQL fetch array memasukkan isi record kedalam array otomatis
		while($hsl_karyawan=mysql_fetch_array($qry_karyawan)){
		?>
		<tr>
		<td><?php echo"$hsl_karyawan[nik]";?></td>
		<td><?php echo"$hsl_karyawan[nama]";?></td>
		<td align = "center">
		<a href="karhapus.php?idhapus=<?php echo"$hsl_karyawan[nik]";?>" target="_blank " 
		onClick="return confirm('Apakah Anda yakin menghapus data ini ?' + '\n'
		+ '<?php echo "-NIP = $hsl_karyawan[nik]";?>' + '\n'
		+ '<?php echo "-NAMA = $hsl_karyawan[nama]";?>' + '\n'
		+ '<?php echo "-ALAMAT = $hsl_karyawan [alamat]";?>' + '\n\n'
		+ 'Jika Ya Silahkan klik OK, Jika TIDAK klik CANCEL.')">Hapus</a>
		</td>
		</tr>
		<?php } ?>
		</table>
		</body>
		</html>