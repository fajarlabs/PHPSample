<?php
/*
Cara Penulisan Variable :
Dalam menulis variable ada hal-hal yang harus diperhatikan, dan jika tidak diikuti maka
variable tersebut tidak akan menjadi variable, tapi bilangan lain atau mungkin error :
$variable 			-> harus di awali oleh huruf atau _, tidak boleh memuat spasi
					   tidak boleh memuat spesial karakter (~!@#$% dan lain lain)
$892 				-> ini contoh yang salah dalam penulisan variable
$ini bukan variable -> ini contoh yang salah dalam penulisan variable
$_variable1 		-> ini adalah contoh yang benar dalam penulisan variable
*/

   $tahun = 2010; // ini adalah proses assignment pertama
   echo $tahun ."<br>" ; // baris baru
   
   $tahun = 2012; // ini adalah proses assignment kedua, variabel tertumpuk dengan yang baru
   echo $tahun ;
?>