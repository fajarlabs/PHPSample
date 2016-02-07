
<!--
implode berfungsi
sebaliknya, yakni menggabungkan array menjadi satu string, contohnya adalah seperti
ini:
implode("[batasan yang dipakai untuk menggabungkan]"

-->

<?php
$arraybelajar = array("saya", "sedang", "belajar", "bahasa","pemrogaman", "PHP");
$kalimatbelajar = implode(" ", $arraybelajar);
echo $kalimatbelajar."<br>";
?>

<?php
$arraytanggal = array(03, "Maret", 1924);
$tanggal = implode("-",$arraytanggal);
echo $tanggal;
?>