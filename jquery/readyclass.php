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
								$('#judul').addclass("merahkuning");
								$('.sub1').addclass("kuninghitam");
							}
					);
</script>
<style type="text/css">
			<!-- Class merahkuning -->
			.merahkuning {
							color : red;
							font-weight : bold;
							background-color : yellow;
							padding : 3px;
						}
			<!-- Class kuninghitam-->
			.kuninghitam {
							color : yellow;
							background-color : black;
						 }
</style>
</head>
<body>
<h1> Judul Buku Kuliah Pemrograman Web </h1>
<ol id="judul">
				<li class="sub1">Pemrograman PHP </li>
				<li> Database mysql </li>
				<li class="sub1"> Mempercantik web dengan JQuery</li>
</ol>
</body>
</html>
						