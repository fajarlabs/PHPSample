<html>
<head>
<title>Menggunakan Dialog dengan Button</title>
<?php include "Library.php" ?>
<script type="text/javascript">
$("document").ready(function()
						 {
						  // Fungsi modal yaitu apabila dialog terbuka maka elemen atau halaman yang berada di
						  // Belakangnya tidak bisa diakses
						  $("#pesan").dialog({modal:true,show:true,hide:"explode"});
						 }
					);
</script>
</head>
<body style="font-size:80%">
<div id="luardialog" title="Nasehat hari ini"> Ciri proaktif adalah berani mengambil tanggung jawab <br/>Anda senantiasa meliah diri anda sendiri sebagai yang perlu dibenahi, <br/>Bukannya orang lain.</div>
<div id="pesan" title="Nasehat hari ini">
yang merasakan kebahagiaan sejati adalah mereka yang merasakan bahagia melihat orang lain bahagia
</div>
<a href="www.google.com">Google</a>
</body>
</html>