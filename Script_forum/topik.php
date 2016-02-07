<?php
include "koneksi.php";
include "header.php";
include "fungsi_autolink.php";


$sql = "SELECT * FROM	topik
		   WHERE id_topik='$_GET[id]'";			
$hasil = mysql_query($sql);

while($r=mysql_fetch_array($hasil)){
	echo "<h3>Topik: $r[subjek]</h3>";

	$sql2 = "SELECT tanggapan.id_topik, tanggapan.isi_tanggapan, tanggapan.tgl_tanggapan, tanggapan.username, anggota.username, anggota.email  	
          FROM tanggapan LEFT JOIN anggota 
          ON tanggapan.username=anggota.username 
          WHERE id_topik='$_GET[id]'";					
	$hasil2 = mysql_query($sql2);
			
	while($r2=mysql_fetch_array($hasil2)){
    $tgl_tanggapan=date('d-m-Y/H:i:s', strtotime($r2['tgl_tanggapan']));
    $email=$r2['email'];

    $hurufkecil = strtolower($email);
    $gambar = md5($hurufkecil);

    $isi = nl2br($r2['isi_tanggapan']); // membuat paragraf pada isi komentar
    $isi_tanggapan = autolink($isi);
    //echo ;	      

		echo "<table>
          <tr>
					<td colspan=2 bgcolor=#cccccc><small><i>$tgl_tanggapan</i></small></td>
          </tr>
          <tr>		      
					<td width=150 bgcolor=#EFF0F4 align=center>$r2[username]<br />
          <img src='http://www.gravatar.com/avatar.php?gravatar_id=$gambar'></td>
					<td width=550>$isi_tanggapan</td>
					</tr></table>";
	}
	
	if(!$_SESSION['signed_in']){
		echo "Anda harus <a href=signin.php>Login</a> dulu untuk bisa berdiskusi. <br />
          Atau Anda juga bisa <a href=signup.php>Daftar</a> dulu menjadi anggota baru.";
	}
	else{
		//show reply box
		echo "<h3>Tanggapan:</h3>
					<form method=post action=tanggapan.php?id=$r[id_topik]>
						<textarea name=isi_tanggapan cols=60 rows=5 /></textarea><br />
						<input type=submit value=Kirim />
					</form>";
	}
  
  // Apabila topik dibaca, maka tambahkan berapa kali dibacanya
  $sql3 = mysql_query("UPDATE topik SET dibaca=$r[dibaca]+1 WHERE id_topik='$_GET[id]'"); 
}

include "footer.php";
?>
