<!-- pertama kita buat terlebih dulu file cookie1.php -->
<?php
// lalu di sini kita siapkan variable untuk cookienya
$isicookie = "ini adalah isi dari cookie";
// kemudian kita buat cookienya dengan lama waktu 1 jam misalnya ...
// di hitung dengan menggunakan satuan waktu detik
setcookie("cookie_start", $isicookie, time()+3600);
// untuk dapat mengakses cookie anda dapat menggunakan sintax
echo $_COOKIE["cookie_start"];
?>