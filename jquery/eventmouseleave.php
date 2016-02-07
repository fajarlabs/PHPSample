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
							 // Fungsi mouseover
							  $("div").mouseover (
													function()
															{
															  $(this).css({background : "red"});
															}
												 );
							 //  Fungsi mouseleave
							 $("div").mouseleave (
													function()
															{
															  $(this).css({background : "yellow"});
															}
												 );
							}
					);
</script>
<style type="text/css">
div {
		background : yellow ;
		width : 60px;
		height : 60px;
		float : left;
		margin : 10px;
		cursor : pointer;
	}
</style>
<title>Latihan double klik</title>
</head>
<body>
<p>klik dua kali pada setiap kotak untuk mengubah warnanya</p>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
</body>
</html>							
												





