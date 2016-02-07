<!-- trim() digunakan untuk menghilangkan spasi, dikiri atau dikanan, biasanya
digunakan untuk proses pengolahan inputan username dan password yang dilakukan oleh
user, biasanya ini terjadi ketika user tidak sengaja/lupa menekan tombol spasi di
keyboard, untuk menanganinya anda dapat menggunakan trim()
contoh penggunaanya : 

andapun juga bisa menghilangkan spasi yang ada di kiri dan kanan menggunakan fungsi
kiri dengan ltrim(), dan dikanan dengan rtrim();
-->

<?php
$password = " iniadalahpassword ";
$passwordasli = trim($password);
echo $passwordasli;
?>