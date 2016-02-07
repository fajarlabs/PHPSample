<html>
<head>
<title>Menggunakan Accordion</title>
<?php include "Library.php" ?>

<!-- Untuk style CSS lebih baik menggunakan tag pembuka <style> agar lebih cepat -->
<style>
#panel 
		{
			padding: 10px;
			width: 600px;
			height: 400px;
		 }
</style>
<!-- Untuk javascript lebih baik menggunakan tag script saja agar lebih cepat -->
<script type="text/javascript">
	$(function() {
		$( "#isi" ).accordion({
			heightStyle: "fill"
		});
	});
	$(function() {
		$( "#panel" ).resizable({
			minHeight: 400,
			minWidth: 600,
			resize: function() {
				$( "#isi" ).accordion( "refresh" );
			}
		});
	});
	</script>
		  
</head>
<body style="font-size:80%">
<div id="panel">
<div id="isi">
<h2><a href="#">Web Designer</a></h2>
<div>Web designer bertugas sebagai juru gambar, yaitu mendesain web</div>
<h2><a href="#">Web Programmer</a></h2>
<div>Web programmer bertugas sebagai juru coding, yaitu melakukan pemrograman website</div>
<h2><a href="#">Web Administrator</a></h2>
<div>Web Administrator bertugassebagai juru maintenance, yaitu melakukan pemeliharaan dan penjagaan website</div>
</div></div>
</body>
</html>