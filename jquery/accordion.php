<html>
<head>
<title>Menggunakan Accordion</title>
<link type="text/css" rel="stylesheet" href="develop/themes/smoothness/jquery.ui.all.css" />
<script type="text/javascript"src="develop/jquery-1.8.3.js"></script>
<script type="text/javascript"src="develop/ui/jquery.ui.core.js"></script>
<script type="text/javascript"src="develop/ui/jquery.ui.widget.js"></script>
<script type="text/javascript"src="develop/ui/jquery.ui.accordion.js"></script>
<script type="text/javascript" src="develop/ui/jquery.ui.effect.js"></script>
<script type="text/javascript">
$("document").ready(function()
						 {
							$("#isi").accordion({event:"mouseover",animated:"easeOutBounce"}); // event tanpa harus di klik tab menunya
						 }
					);
</script>
</head>
<body style="font-size:65%">
<div id="isi">
<h2><a href="#">Web Designer</a></h2>
<div>Web designer bertugas sebagai juru gambar, yaitu mendesain web</div>
<h2><a href="#">Web Programmer</a></h2>
<div>Web programmer bertugas sebagai juru coding, yaitu melakukan pemrograman website</div>
<h2><a href="#">Web Administrator</a></h2>
<div>Web Administrator bertugassebagai juru maintenance, yaitu melakukan pemeliharaan dan penjagaan website</div>
</div>
</body>
</html>