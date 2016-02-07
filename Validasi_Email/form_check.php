<html>
<head><title>Form Check Input</title></head>
<body>
<form action="regex2.php" method="POST">
<table border='0' width='35%' cellpadding='2' cellspacing='2' align='center'>
<caption>
	<h2>Formulir Pendaftaran Mahasiswa Baru</h2><p><?php echo $warning ; ?></p>
</caption>
<tr>
	<td>Email</td><td><input type="text" name="email" size="30" maxlength="50"/></td>
</tr>
<tr>
	<td></td><td><input type="submit" name="kirim" value="Daftar!"/></td>
</tr>
</table>
</form>
</body>
</html>