<html>
<head>
<title>
Situs Beritaku
</title>
<style>
#konten{width:600;font-family:georgia}
</style>
</head>
<body bgcolor="lightyellow">
<h1>Situs Beritaku</h1>
<hr>
<a href=index.php>Home</a>
<div id="konten">
<?php
include "koneksi.php";

$berita = mysql_query("SELECT * FROM tabelberita ORDER BY beritaid DESC LIMIT 10");
while($b = mysql_fetch_array($berita)){
    $judul = preg_replace("/\s/","-",$b['judul']);
    $url_link = "berita".$b['beritaid']."-".$judul.".html";
    
    echo "<a href=\"".$url_link."\"><h2>".$b['judul']."</h2></a>";
    echo "<font color=red>".$b['tanggal']." Ketegori: ".$b['kategori']."<br></font>";
    echo $b['pendahuluan']."<br>";
    echo "<a href=\"".$url_link."\">Selengkapnya</a>";
    echo "<hr>";
}
?>
</div>
</body>
</html>
