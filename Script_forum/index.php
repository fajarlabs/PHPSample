<?php
include "koneksi.php";
include "header.php";

// query untuk menampilkan kategori 
// dan hitung jumlah topik pada masing-masing kategori 
$sql = "SELECT kategori.id_kategori, nama_kategori, keterangan,
			 COUNT(topik.id_topik) AS jml_topik 
       FROM	kategori LEFT JOIN topik 
       ON topik.id_kategori=kategori.id_kategori 
       GROUP BY kategori.id_kategori";
$hasil = mysql_query($sql);

echo "<table border=1>
      <tr><th>Kategori</th><th>Topik</th><th>Topik Terakhir</th></tr>";	
			
while($r=mysql_fetch_array($hasil)){				
  echo "<tr><td width=350>
        <b><a href=kategori.php?id=$r[id_kategori]>$r[nama_kategori]</a></b>
        <br /><small>$r[keterangan]</small>
        </td>
        <td align=center>$r[jml_topik]</td>
        <td width=250>";
				
			  // query untuk topik terakhir
			  $sql2 = "SELECT	*	FROM topik 
                WHERE id_kategori='$r[id_kategori]' 
                ORDER BY tgl_topik DESC LIMIT 1";
								
			  $hasil2 = mysql_query($sql2);
		    while($r2=mysql_fetch_array($hasil2)){
		      $tgl_topik=date('d-m-Y/H:i:s', strtotime($r2['tgl_topik']));
				  echo "<a href=topik.php?id=$r2[id_topik]>$r2[subjek]</a> 
                <br /><small><i>$tgl_topik oleh: $r2[username]</i></small>";
			  }
  echo "</td></tr>";            
}

echo "</table>";
include "footer.php";
?>
