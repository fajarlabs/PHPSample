<!-- Menggunakan fungsi fputs 
Menulis atau menambahkan isi file dengan fputs()
Untuk menulis isi file anda dapat menggunakan fputs(). Untuk dapat menggunakan
fputs() anda harus membuka filenya terlebih dahulu, dengan fopen(), kemudian gunakan
fputs(), setelah itu baru tutup file dengan fclose();
-->
<?php

$file = fopen("tes.txt","a");
fputs($file, "Welcome to the jungle");
fclose($file);

/*
Parameter a pada fopen("tes.txt", a); berfungsi untuk menambahkan isi file di bagian
akhir. Jika anda menggunakan w atau r, maka isi file akan dihapus kemudian di timpah
dengan yang baru. Jika anda ingin menambahkannya di akhir maka gunakan a.
*/
?>