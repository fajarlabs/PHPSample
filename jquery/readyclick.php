<html>
<head>
<script language="javascript" src="jquery-1.4.js"></script>
<script language="javascript">
/* jQuery akan memastikan bahwa semua elemen atau elemen 
	yang diinginkan sudah ditampilkan semua di halaman web, fungsi yang digunakan adalah: */
$(document).ready(function() // lakukan fungsi dan LIHAT BAIK-BAIK kurung kurawalnya apabila hilang salah
							 // salah satu kurungnya maka tidak akan berfungsi
								{
								// Baris kode yang akan dijalankan
								// Apabila semua elemen sudah ditampilkan semua
									$("input").click(
														// Setelah diklik maka tampilkan "hallo Jquery"
													   function()
														{					
															alert ("Hallo JQuery!!!");
														}
													)
								}
					);
</script>
</head>
<body>
<input type="submit" value="click me"/>
</body>
</html>