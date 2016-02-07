<html>
<head> Kirim email dalam bentuk HTML </head>
<form method=post action=<?php $_SERVER['PHP_SELF']; ?>>
Nama Anda : <input name="nama" type="text"><br>
Email Anda : <input name="email" type="text"><br>
Pesan : <textarea name="pesan" cols=25 rows=5></textarea><br>
<input type="submit" name="kirimkan" value="kirim">
</form>

<?php
if($_POST[kirimkan])
	{
		$kepada= "webmaster@localhost"; // alamat yang dituju
		$judul="Kontak dari website";
		$pesan="$_POST[pesan]";
		$dari ="From: $_POST[nama] \n";
		$dari .="Reply-To: $_POST[email] \n";
		
		//Tambahkan agar email mendukung format HTML
		$dari .="Content-type: text/html \r\n";
		mail($kepada,$judul,$pesan,$dari);
		echo "Pesan Anda Telah terkirim";
	}
?>