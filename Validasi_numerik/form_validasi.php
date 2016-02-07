<html>
<head><title>Form Check Input</title></head>
<body>
<form action="check_input.php" method="POST">
<table border='0' width='35%' cellpadding='2' cellspacing='2' align='center'>
<caption><h2>Formulir Pendaftaran Mahasiswa Baru</h2>
<p><?php echo $warning ; ?></p>

</caption>
<!-- di sini saya coba membuat 6 inputan, yang isinya ada yang terdiri
dari huruf saja dan ada yang terdiri angka saja -->
<tr>
	<td>Nama</td>
	<td><input type="text" name="nama" size="30" maxlength="50"/></td>
</tr>
<tr>
	<td>Jenis Kelamin</td>
	<td><input type="radio" name="jenis_kelamin" value="pria"/><label for="jenis_kelamin">Pria</label>
    <input type="radio" name="jenis_kelamin" value="wanita"/><label for="jenis_kelamin">Wanita</label>
	</td>
</tr>
<tr>
	<td>Tanggal Lahir</td>
	<td><input type="text" name="tanggal_lahir" size="30" maxlength="50"/></td>
</tr>
<tr>
	<td>Alamat</td><td><textarea name="alamat" cols="30" rows="4"></textarea></td>
</tr>
<tr>
	<td>No Telepon</td><td><input type="text" name="telepon" size="30" maxlength="50"/></td>
</tr>
<tr>
	<td></td><td><input type="submit" name="kirim" value="Daftar!"/></td>
</tr>
</table>
</form>
</body>
</html>