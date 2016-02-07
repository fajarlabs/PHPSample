<html>
<head>
<title> PHP dan JavaScript </title>
<script language=javascript>
//Beberapa objek yang dilindungi
var allowedTags=["input","textarea","select"]
allowedTags=allowedTags.join("|");

//Fungsi untuk menonaktifkan select
function disableselect(e){
if (allowedTags.indexOf(e.target.tagName.toLowerCase())== -1)
    return false;
}
//Fungsi mengaktifkan kembali
function reEnable(){
	return true;
}

if (typeof document.onselectstart != "undefined")
	document.onselectstart=new function ("return false");
	else{
	document.onmousedown=disableselect;
	document.onmouseup=reEnable;
}
</script>
</head>
<body>
Halaman ini tidak boleh dikopi, anda dilarang untuk memblok teks dan objek didalamnya.
</body>
</html>

