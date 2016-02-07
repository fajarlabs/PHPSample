<html>
<head>
<title>Menggunakan Dialog dengan Button</title>
<?php include "Library.php" ?>
<script type="text/javascript">
$("document").ready(function()
						 {
						  // Fungsi modal yaitu apabila dialog terbuka maka elemen atau halaman yang berada di
						  // Belakangnya tidak bisa diakses
						  $("#pesan").dialog({modal:true,show:true,hide:true});
						  // Kolaborasi dengan accordion
						  $("#isi").accordion();
						 }
					);
</script>
<style type="text/css">
#panel{
		height:400px;
		width:273px;
	  }
body {
	background-image: url(jasaaplikasi.jpg);
	background-color: #FF8000;		
}
</style>
</head>
<body style="font-size:80%">

<div id="pesan" title="Wellcome To PortalCyber 2013">
<div id="panel">
<div id="isi">
<h2><a href=""><b>Elearning Quiz BSI</b></a></h2>
<div>Untuk mencoba mengikut ujian elearning klik tombol berikut : 
     <input type="submit" id="buka" value="Quiz"/></div>
<h2><a href="#"><b>Web Programmer</b></a></h2>
<div>Web programmer bertugas sebagai juru coding, yaitu melakukan pemrograman website</div>
<h2><a href="#"><b>Web Administrator</b></a></h2>
<div>Web Administrator bertugassebagai juru maintenance, yaitu melakukan pemeliharaan dan penjagaan website</div>
</div></div></div>
<div id="luardialog" > Ciri proaktif adalah berani mengambil tanggung jawab <br/>Anda senantiasa meliah diri anda sendiri sebagai yang perlu dibenahi, <br/>Bukannya orang lain.</div>
<a href="www.google.com">Google</a>
</body>
</html>