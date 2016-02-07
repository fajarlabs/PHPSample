<?php
// jika tombol kirim yang memiliki value insert di klik
if ($_POST['kirim'] == "insert")
    {
       echo "Proses Insert...";
    }
// namun jika yang di klik itu tombol update
// artinya jika tombol kirim yang memiliki value update di klik
else if ($_POST['kirim'] == "update")
   {
// maka lakukan proses update
       echo "Proses Update...";
// lalu kita tutup lagi
   }
// dan jika tidak ada button yang diklik
else
   {
// maka tidak ada proses apa-apa yang terjadi ...
       echo "Tidak ada proses...";
    }
?>