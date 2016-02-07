<html>
<head>
<title>Form Upload</title>
</head>
<body>
<form enctype="multipart/form-data" action="upload.php" method="post">
<p>
<!-- MAX_FILE_SIZE digunakan untuk membatasi size/ukuran file yang akan di upload -->
<input type="hidden" name="MAX_FILE_SIZE" value="102400" />
<input type="file" name="file" /><br/>
<input type="submit" value="upload" />
</p>
</form>
</body>
</html>