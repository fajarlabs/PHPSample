<?php
include "koneksi.php";
include "header.php";

// tampilkan kategori yang dipilih
$sql = "SELECT * FROM	kategori 
       WHERE id_kategori='$_GET[id]'";
$hasil = mysql_query($sql);

$r=mysql_fetch_array($hasil);
echo "<h3>Kategori: $r[nama_kategori]</h3>";

// tampilkan topik berdasarkan kategori yang dipilih
$sql2 = "SELECT topik.id_topik, subjek, tgl_topik, dibaca, topik.username,  
        COUNT(tanggapan.id_tanggapan) AS jml_tanggapan 
        FROM topik LEFT JOIN tanggapan 
        ON topik.id_topik=tanggapan.id_topik 
				WHERE	id_kategori='$_GET[id]'
        GROUP BY tgl_topik DESC";
$hasil2 = mysql_query($sql2);
       
echo "<table border=1>
			<tr><th>Topik</th><th>Tanggapan</th><th>Dibaca</th><th>Tanggapan Terakhir</th></tr>";	
					 
while($r2=mysql_fetch_array($hasil2)){				
	$jml_tanggapan=$r2[jml_tanggapan]-1;
  echo "<tr>
        <td width=300>
        <a href=topik.php?id=$r2[id_topik]>$r2[subjek]</a><br />
        <small>oleh: $r2[username]</small>
        </td>
        <td align=center>$jml_tanggapan</td>
        <td align=center>$r2[dibaca]</td>
        <td>";
                
			  // query untuk tanggapan terakhir
			  $sql3 = "SELECT	*	FROM tanggapan 
                WHERE id_topik='$r2[id_topik]' 
                ORDER BY tgl_tanggapan DESC LIMIT 1";
								
			  $hasil3 = mysql_query($sql3);
		    while($r3=mysql_fetch_array($hasil3)){
		      $tgl_tanggapan=date('d-m-Y/H:i:s', strtotime($r3['tgl_tanggapan']));
				  echo "<small><i>$tgl_tanggapan oleh: $r3[username]</i></small>";
			  }
  echo "</td></tr>";            
}


echo "</table>";					
include "footer.php";
?>
