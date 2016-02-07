
	<?php
		// Lakukan inisialisasi Koneksi ke MySQL
		mysql_connect("localhost","root","");
		// Inisialisasi Pilih database
		mysql_select_db("db_karyawan");
		// Inisialisasi query pemilihan tabel karyawan
		$sql_karyawan1="DELETE FROM tbl_karyawan WHERE nik='$_GET[idhapus]'";
		// Inisialisasi query 
		$qry_karyawan1=mysql_query($sql_karyawan1);
		if($qry_karyawan1){
		header("location:tempil_data.php");}
		else { echo "Data Gagal diupload...";}
		?>