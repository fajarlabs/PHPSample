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
$("Document").ready(
					 function()
							{
							  $(".flip").click (
												 function()
														{
														  $(".pesan").slideToggle("slow");
														}
												);
							}
					);
</script>
<!-- CSS dibawah apabila menggunakan CSS Class dari FLIP maka akan menggabungkan pula CSS dari DIV.PESAN
	 untuk kepala CSS ada disebelah kanan sendiri HEAD CSS -->
<style type="text/css">
div.pesan {
			height : 100 px;
			display : none;
		  }
div.pesan, p.flip
		  {
			background : lightblue;
			margin :0px;
			padding :0px;
			text-align :left;
			border : 1px solid black;
		  }
</style>
<title> Efek Slide </title>
</head>
<body>
<!-- Text ini tidak terlihat karena di CSS ada display none -->
<div class="pesan"> Sukses bukanlah kunci kebahagiaan </b>
					Kebahagiaanlah kunci kesuksesan <p>
					Jika senantiasa melakukan segala sesuatu dengan penuh cinta, maka anda akan sukses </p>
</div>
<!-- Apabila menggunakan Tag <p> karena sudah didefinisikan di css yaitu p.flip -->
<p class ="flip"> <input type="submit" value="Sembunyi/Muncul"/> </p>
</body>
</html>