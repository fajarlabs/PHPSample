<?php
include "koneksi.php";
include "header.php";

if($_SERVER['REQUEST_METHOD'] != 'POST'){
	echo "Anda tidak boleh mengakses file ini secara langsung";
}
else{
	if(!$_SESSION['signed_in']){
		echo "Anda harus <a href=signin.php>Login</a> dulu untuk Berdiskusi.";
	}
	else{
		$sql = "INSERT INTO tanggapan(isi_tanggapan, tgl_tanggapan, id_topik, username) 
				   VALUES ('$_POST[isi_tanggapan]',	NOW(), '$_GET[id]',	'$_SESSION[username]')";
		$hasil = mysql_query($sql);
						
    header('location:topik.php?id='.$_GET[id]);
	}
}

include "footer.php";
?>
