<!--Untuk mengecek file, ada atau tidaknya file tersebut dalam direktori/path yang
ditentukan, biasanya seorang web developer cukup menggunakan fungsi file_exist(),
untuk mengecek apakah file tersebut ada.
Siapkan terlebih dahulu sebuah file kosong di c:\xampp\htdocs\latihanphp
berikan nama tes.txt, kemudian selanjutnya silahkan buat script php nya seperti ini : -->

<?php
if (file_exists("tes.txt") == 1)
	{
		echo "File-nya ada...";
	}
else
	{
		echo "Filenya tidak ada ...";
	}
?>