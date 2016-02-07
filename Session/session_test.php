<!-- 
file pertama (session.php) digunakan untuk meregistrasikan/mengeset
session, file yang kedua berguna sebagai halaman untuk mengetes apakah sessionnya
telah berfungsi dengan benar, jika benar maka file yang kedua itu dapat menampilkan isi
dari session yang sebelumnya telah diregistrasikan pada halaman pertama ...
file pertama, session_reg_first.php :
-->
<?php
// untuk membuat session, diperlukan fungsi khusus yang dapat
// memproduksi session
// yakni, dan jangan lupa untuk meletakkan sessio_start di baris paling
// awal setelah <?php
session_start();
$_SESSION['first'] = "saya adalah session";
echo "Anda telah meregistrasikan session berisi '<strong>".
$_SESSION['first'] . "</strong>'";

// Apabila kita destroy maka variabel $_SESSION['first'] tidak bisa digunakan selanjutnya atau variabelnya kosong
//session_destroy();
?>
<br />
<a href="other_page.php">klik di sini untuk pindah halaman</a>