<!--Untuk mencari posisi suatu karakter atau string anda dapat menggunakan strpos().-->

<?php
$kalimat = "Saya sedang belajar PHP";
$katayangdicari = "PHP";
$posisi = strpos($kalimat, $katayangdicari);
echo $posisi;
?>