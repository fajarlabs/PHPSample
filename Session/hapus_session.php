<?php
session_start();
// Perhatikan hasil dibawah ini
echo "Isi '$_SESSION[first]' adalah ... = " . $_SESSION['first'];

unset($_SESSION['first']);
// Perhatikan hasil dibawah ini dibrowser
echo "Isi '$_SESSION[first]' adalah ... = " . $_SESSION['first'];
// jika ingin memusnahkan semua session yang ada
// anda dapat menggunakan session_destroy
// biasanya hal ini digunakan ketika proses logout terjadi
// semua session yang ada benar-benar di hapus
// penggunaanya adalah seperti ini
session_destroy();
echo "<br />Semua session telah di hapus ...";
// Enter 2x pada URL anda atau di refresh lagi yang terjadi adalah session sudah terhapus
?>