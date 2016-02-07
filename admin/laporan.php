<?php
// Konek ke server MySQL
$konek=mysql_connect("localhost","root","");
mysql_select_db("db_karyawan");

// Alamat file template
$tpl_file = "laporan.rtf";
if (file_exists($tpl_file)) {
	// Alamat file hasil parser
	$target = "laporan.rtf";
	// Membuka file template
	$f=fopen($tpl_file, "r+");
	$isi=fread($f,filesize($tpl_file));
	fclose($f);
	
	// Query menampilkan data
	$sql_data="SELECT * FROM tbl_karyawan WHERE nik='12120002'";
	$qry_data=mysql_query($sql_data, $konek) or die ("Gagal query karyawan");
	$data=mysql_fetch_array($qry_data) or die ("Gagal mendapatkan data ".mysql_error());
	
	// Menampilkan data pribadi kedalam template
	$isi = str_replace('Tglcetak', date('d-m-y'), $isi);
	$isi = str_replace('Datanik', $data['nik'], $isi);
	$isi = str_replace('Datastatus',$data['status'], $isi);
	$isi = str_replace('Datanama',$data['nama'],$isi);
	$isi = str_replace('Datajabatan', $data['jabatan'],$isi);
	$isi = str_replace('Dataalamat', $data['alamat'],$isi);
	
	// Konversi data tanggal ke dd-mm-yyyy
	//$isi = str_replace('datatgl', $data['tgl_lahir'], $isi);
	
	// Merekam kembali file hasil parser
	$f = fopen($target, "w+");
	fwrite($f, $isi);
	fclose($f);
	
	// Otomatis membuka file hasil parser saat proses selesai
	echo "<META HTPP-EQUIP=\"refresh\" CONTENT=0; URL=$target>";
	}
	?>
	