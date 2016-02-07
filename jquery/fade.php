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
							 // Effect keluar
							  $(".fadeout").click(
												   function ()
												        {
														  $("#kotak").fadeOut("slow");
														}
												 )
							// Effect masuk
							  $(".fadein").click(
												  function ()
												        {
														  $("#kotak").fadeIn("slow");
														}
												)
							// Effect keluar
							  $(".fadeTo3").click(
												  function ()
												        {
														  $("#kotak").fadeOut("slow",0.10);
														}
												)
							}
					)
</script>
<style type="text/css">
#kotak {
			width : 250px;
			height : 180px;
			background : yellow;
			border : 2px solid black;
		}
</style>
<body>
<div id="kotak"></div><br/>
<button class="fadeout">FadeOut</button>
<button class="fadein">FadeIn</button>
<button class="fadeTo3">Fade To 0.3</button>
</body>
</html>
														
														
														
														