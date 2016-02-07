<!-- Apa perbedaan antara double quote yang diwakili dengan tanda " dengan one quote
yang di wakili oleh tanda ' One quote hanya dapat menampilkan karakter aslinya, bukan
isi dari variable. Kita buktikan : -->
<?php
$nilai = 90;
echo '$nilai'."<br>";
?>
<!--Apabila kita lihat dibrowser, one quote, atau kutip satu itu tidak menampikan isi dari
$nilai, melainkan karakter aslinya. Namun dengan double quote anda dapat menampilkan
isi variablenya :-->
<?php
$nilai = 90;
echo "$nilai";
?>