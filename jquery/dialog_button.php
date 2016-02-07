<html>
<head>
<title>Menggunakan Dialog dengan Button</title>
<?php include "Library.php" ?>
<script type="text/javascript">
$("document").ready(function()
						 {
						  $("#pesan").dialog({autoOpen:false}); // Perhatikan penulisan fungsi autoOpen, "O" huruf kapital
						  $("#buka").click(function()
												{
													$("#pesan").dialog("open");
												}
											);
						 }
					);
</script>
</head>
<body style="font-size:80%">
<div id="pesan" title="Nasehat hari ini">
Saat kita mendapat kesusahan, tuliskan semua itu di pasir, biarkan angin keikhlasan membawanya jauh dari ingatan. Biarkan catatan itu hilang bersama menyebarnya pasir ketulusan.
</div>
<input type="submit" id="buka" value="buka kotak dialog"/>
</body>
</html>