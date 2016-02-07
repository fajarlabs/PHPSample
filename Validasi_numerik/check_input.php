<?php
// kita cuma akan mengambil sampel untuk nama dan telepon saja...
// selebihnya bisa anda praktikan nanti
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
// jika nama yang di inputkan itu terdiri dari angka saja
if (is_numeric($nama))
		{
			// maka berikan warning jika yang di masukkan itu bertipe numeric...
			echo "<strong>Nama yang anda masukkan bertipe numeric</strong>,
			silahkan isi kembali dengan string...<br />";
		}
// dan apabila nama yang diinputkan itu bertipe string
else if (is_string($nama))
		{
			echo "<strong>Nama yang anda masukkan bertipe string </strong><br/>";
		}
else
		{
			echo "Anda harus memasukkan nama dalam format string...<br />";
		}
// begitu juga dengan nomor telepon, apabila yang diinputkan itu
// bertipe numeric
if (is_numeric($telepon))
		{
			// maka ...
			echo "<strong>Nomor Telepon</strong> yang anda masukkan <strong>
			bertipe numeric</strong><br />";
		}
else
		{
			// maka
			echo "Anda harus memasukkan nomor telephon dalam format numeric...<br />";
		}
?>