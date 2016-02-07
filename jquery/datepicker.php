<html>
<head>
<title>Menggunakan Datepicker</title>
<!-- Url tempat CSS/ root folder JS -->
<?php include ("Library.php"); ?>
<script>
$("document").ready(function()
								{
									// Perhatikan dibawah ini cari merubah format kalendernya
									$("#tanggal").datepicker({ dateFormat:"dd-MM-yy",
															   changeMonth:true,
															   changeYear:true,
															   showOn:"button",// Tampilkan tombol
															   buttonImage:"develop/demos/datepicker/images/calendar.gif",
															   buttonImageOnly:true // Menggunakan gambar kalender 
															   /*showAnim:"fold",
															   showOptions:{direction:"up"},*/
														
															  }); // merubah formatnya
								}
					);
															
</script>
</head>
<body>
Masukkan tanggal :<input id="tanggal" type="text">
</body>
</html>