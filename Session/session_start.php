<!-- 
session disimpan oleh browser sementara mirip dengan pengandaian sebuah tiket masuk.
setiap halaman php yang membutuhkan adanya login akan mengecek apakah variable
sessionnya sudah diregistrasikan. jika sudah maka, halaman php tersebut akan
mempersilahkan user dapat mengaksesnya...
Oke, karena session memiliki tugas khusus dan session bertugas sebagai variable
global yang dapat di akses di halaman mana saja, sehingga session pun membutuhkan
fungsi tersendiri untuk dapat menjalankannya.
Standarnya membuat session adalah seperti ini :
-->
<?php
// fungsinya terlebih dahulu
session_start();
// dan standarnya setiap session_start digunakan
// dan ketika user mengakses halaman tersebut biasanya memiliki
// session_id tersendiri kita tes
echo session_id();
// session_id(() akan selalu berbeda setiap anda menjalankan browser
?>