<!-- PENGULANGAN FOR
for(nilai awal; batas nilai; operator increment/decrement)
{
pernyataan yang akan di proses
}

For merupakan jenis pengulangan yang cukup sering digunakan, dan penggunaan
pengulangan bentuk for ini tergantung kebutuhan. dan for ini bisa digunakan untuk
contoh kasus sederhana yang saya sebutkan di awal tadi yaitu menampilkan angka 1 -
100 atau 1 - 50jt dengan cepat. For membuat semuanya menjadi sangat effisien. Bentuk
umum for adalah seperti ini :
-->
<?php
for($x=1; $x<=100; $x++)
	{
		echo "Angka $x<br>";
	}
?>

<html>
<head>
<title>Pengulangan header</title>
</head>
<body>
<?php
for($x=1;$x<=7;$x++)
	{
		echo "<font size=$x> Ukuran font $x</font><br>";
	}
?>
</body>
</html>
