<html>
<head>
<title> Matikan klik kanan </title>
<head>
<script language=Javascript>
// inisialisai variabel
var message="Dilarang melakukan klik kanan..!";

// Membuat fungsi peringatan KLIK
function click(e) {
	if(document.all)
			{
			  if (event.button == 2) 
			    { alert(message);
					return false; }
			}
	if (document.layers)
			{
			  if (e.which == 3)
			    { alert(message);
					return false; }
			}
}
				
if (document.layers) { document.captureEvents(Event.MOUSEDOWN); }
document.onmousedown=click;
// ->
</script>
</head>
<body>
<h3> Cobalah untuk klik kanan </h3>
</body>
</html>