<?php
include "koneksi.php";
include "header.php";

echo "<h3>Membuat Topik Baru</h3>";
if($_SESSION['signed_in'] == false){
	echo "Maaf, Anda harus <a href=signin.php>Login</a> dulu untuk membuat topik.";
}
else{
	if($_SERVER['REQUEST_METHOD']!='POST'){	
		$sql = "SELECT * FROM	kategori";
		$hasil = mysql_query($sql);
		
		echo "<form method=post action=''>
		      <table>
		      <tr><td>Subjek</td><td><input type=text name='subjek' size=40 /></td></tr>
					<tr><td>Kategori</td><td> 
		      <select name=id_kategori>
		      <option value=0 selected>- Pilih Kategori -</option>";
					while($r=mysql_fetch_assoc($hasil)){
						echo "<option value=$r[id_kategori]>$r[nama_kategori]</option>";
					}
		echo "</select><br />	
					<tr><td>Isi Topik</td><td><textarea name='isi_tanggapan' cols=30 rows=4 /></textarea></td></tr>
					<tr><td colspan=2><input type=submit value=Kirim /></td></tr>
					</table>
				 </form>";
	}
	else{
	  $sql2 = "INSERT INTO topik(subjek, tgl_topik, id_kategori, username)
				   VALUES('$_POST[subjek]', NOW(), '$_POST[id_kategori]', '$_SESSION[username]')";
		$hasil2 = mysql_query($sql2);
		
    $id_topik = mysql_insert_id();
				
		$sql3 = "INSERT INTO tanggapan(isi_tanggapan, tgl_tanggapan, id_topik, username)
						VALUES('$_POST[isi_tanggapan]', NOW(), '$id_topik', '$_SESSION[username]')";
		$hasil3 = mysql_query($sql3);
				
    header('location:topik.php?id='.$id_topik);
	}
}

include "footer.php";
?>
