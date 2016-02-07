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
							    $(".mulai").click(
											      function()
												          { 
														    $("#kotak").animate({left:"400"})
															.animate({top:"-200",height:"100",width:"100"},"slow")
															.animate({left:"100",height:"100",width:"100"},"slow")
															.animate({top:"0"},"slow")
															.slideUp()
															.slideDown("slow");
														  }
												  );
							  }
					);
</script>
<style type="text/css">
#kotak {
         background-image: url(bsi.jpg);
         position:relative;
		 width :100px;
		 height:100px;
	   }
</style>
</head>
<body>
<br/><br/><br/><br/><br/>
<button class="mulai">Jalankan</button>
<br/><br/><br/><br/><br/>
<div id="kotak"></div>
</body>
</html>

	