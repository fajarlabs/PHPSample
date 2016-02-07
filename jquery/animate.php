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
							  $(".mulai").click (
												  function()
												          {
															$("#kotak").animate({left:800},"slow");
														  }
												);
							}
					)
</script>
<style type="text/css">
#kotak {
		 position : relative;
		 width : 100px;
		 height : 100px;
		 background : red;
	   }
</style>
<title>Animasi dengan fungsi animate </title>
</head>
<body>
<input type="submit" class="mulai" value="jalankan" />
<div id="kotak"></div>
</body>
</html>