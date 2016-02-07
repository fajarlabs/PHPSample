<?php
// contoh operator assignment
$panjang = 10; // contoh assignment
$lebar = 8; // contoh assignment
$luas = $panjang * $lebar ; // contoh assignment juga

// tanda '=' mewakili proses assignment,
// ada beberapa tanda lagi yang dapat
// melakukan assignment,
// assignment penjumlahan diwakili tanda '+=' contohnya
$tambahdua+=2; // bisa digunakan tetapi terdapat error undefined, harus ada definisi nilai terlebih dahulu
echo $tambahdua."<br>" ;

// hasilnya 2
// hal ini sama dengan pernyatan :
// $tambahdua = $tambahdua + 2;
// assignment pengurangan diwakili tanda '-=' contohnya

$clip = 22;
$clip -= 2; // sama dengan $clip = $clip - 2;
echo $clip."<br>";

$a = 50;
$b = 40;
$c = 30;
$d = 20;
echo "Hasil dari 50+=2 adalah " . $a+=2;
echo "Hasil dari 40-=2 adalah " . $b-=2;
echo "Hasil dari 30*=2 adalah " . $c*=2;
echo "Hasil dari 20/=2 adalah " . $d/=2;

/* dengan tanda titik, tanda titik memiliki arti melanjutkan kalimat. anda juga bisa
menggantikan titik dengan koma. Sebagai contoh apabila kita ingin menulis kalimat
"Saya belajar PHP" kedalam 3 bagian, kita dapat menulisnya seperti ini */
echo "<br> Saya" . "Belajar" . "PHP </br>" ;
?>