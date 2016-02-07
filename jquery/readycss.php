<!--
Selector Tag
Cara menggunakan selector tag adalah dengan langsung menyebut nama tag elemennya.
Selector Id
Cara menggunakan Selector id adalah dengan menyertakan tanda kres (#) sebelum nama elemennya.
Selector Class
Cara menggunakan Selector class ini adalah dengan menyertakan tanda titik (.) sebelum nama elemennya.
-->

<html>
<head>
<script language="javascript" src="jquery-1.4.js"></script>
<script language="javascript">
$("Document").ready(function() 
								{
									$("input").click(
														// Setelah diklik maka tampilkan "hallo Jquery"
													   function()
														{	
															// Rubah tulisan menjadi merah
															$("#p1").css("color","red");
															// dan tampilkan tulisan
															alert ("tulisan menjadi merah...!!! karena CSS-nya");
														}
													)
								}
					);
</script>
<title>Latihan 3 </title>
</head>
<body>
<p id="p1"> Ini isi paragraf 1 </p>
<p id="p2"> ini isi paragraf 2 </p>
<input type="submit" value="Klik MERAH"/>
</body>
</html>	