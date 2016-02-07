<?php
// hapus cookie yang ada dengan unset
echo $_COOKIE['cookie_start'];
unset($_COOKIE['cookie_start']);
// apabila menggunakan WAMP Server akan terjadi kode berikut ini
// Notice: Undefined index: cookie_start in C:\wamp\www\function\cookie\hapus_cookie.php on line 4
// Mengindikasikan bahwa variabel telah kosong atau terhapus
echo "Variabel cookie yang berisi :......... " .$_COOKIE['cookie_start']. "Telah terhapus";
?>