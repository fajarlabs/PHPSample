<html>
<title> image preview upload </title>
<head>
<SCRIPT>
// Untuk menampilkan / Preview Gambar
function preview(){
	var nama=document.forms[0].FileGambar.value;
	document.gambar.src=nama;
}
</SCRIPT>
</head>
<body>
<form action = "" method="post" enctype='multipart/form-data' name="form1" target="_self">
<input type='hidden' name='max_file_size' value='1000000'>
Pilih Gambar : <br>
<input name="FileGambar" type="file" size="40" maxlength="100" onChange='preview()' onKeyUp='preview()'><br>
<input name="Submit" type="submit" value="Simpan"><br><br>
<img src="" name="gambar" width="130" height="144">
</form>
</body>
</html>