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
$id = $_GET['id'];
$berita = mysql_query("SELECT * FROM tabelberita WHERE beritaid=$id");
while($b = mysql_fetch_array($berita)){
    $judul = $b['judul'];
    echo "<h2>".$b['judul']."</h2>";
    echo "<font color=red>".$b['tanggal']." Ketegori: ".$b['kategori']."<br></font>";
    echo $b['pendahuluan']."<p>";
    echo $b['lanjutan'];
}
echo "<p>";
$domain = "http://localhost"; //sesuaikan dengan website kamu
$url = $domain.$_SERVER['REQUEST_URI'];

//membuat tombol facebook
echo "<a href=\"http://www.facebook.com/share.php?u=$url\"><img src=\"facebook.png\" border=0></a>";

//membuat tombol twitter
echo "<a href=\"http://twitter.com/share?url=$url&text=$judul\"><img src=\"twitter.png\" border=0></a>";

//membuat tombol digg
echo "<a href=\"http://digg.com/submit?phase=2&url=$url\"><img src=\"digg.png\" border=0></a>";

//membuat tombol delicious
echo "<a href=\"http://del.icio.us/post?url=$url&title=$judul\"><img src=\"delicious.png\" border=0></a>";
?>
</div>
</body>
</html>
