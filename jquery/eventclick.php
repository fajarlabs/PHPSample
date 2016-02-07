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
<script language="javascript" src="jquery-1.8.3.js"></script>
<script language="javascript">
$("Document").ready(function() 
								{
									$('a').click(
														function()
														{
															alert("Selamat datang diwebsite STMIK Cikarang")
														}
													);
								}
					);
</script>
</head>
<body>
<!-- Apabila diklik akan muncul "ALERT" setelah di klik oke diteruskan ke URLnya -->
<a href="www.bsi.ac.id"> Klik disini menuju halaman web STMIK Cikarang </a>
</body>
</html>