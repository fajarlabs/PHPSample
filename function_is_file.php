<!-- Apakah File atau Direktori??
Untuk mengecek apakah file ataukah direktori terhadap nama file atau direktori kita
dapat menggunakan is_file untuk mengecek file atau bukan dan is_dir untuk mengecek
direktori atau bukan. Implementasinya masih menggunakan file yang tadi yakni tes.txt: -->

<?php
if (is_file("tes.txt"))
	{
		echo "Ini adalah file!";
	}
?>