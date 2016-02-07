<!-- explode() menjadikan spasi sebagai pemisah antara elemen array
yang satu dengan lainnya, sehingga apabila terdapat spasi maka kata-kata tersebut akan
di pecah sehingga menjadi array
explode("[batasan yang dipakai]","kalimatnya");
 -->

<?php
$belajar = "saya sedang belajar bahasa pemrogaman PHP";
$arraybelajar = explode(" ", $belajar);
// Perhatikan bahwa string diatas dipisahkan oleh "SPASI"
echo $arraybelajar[5]."<br>"; // Memunculkan array yang ke 5
?>

<?php
$tanggal = "03/Maret/1924";
$tanggalarray = explode("/", $tanggal);
echo $tanggalarray[2];
?>