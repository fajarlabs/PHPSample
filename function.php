<!--
Menggunakan Fungsi untuk effisiensi Coding
Fungsi ini berisi sekumpulan perintah program, bisa berisi argumen if, pengulangan,
variable, yang dapat menerima inputan berupa variable berisi nilai kemudian mengolah
nilai tersebut sesuai dengan kebutuhan. Bentuk umum dalam membuat fungsi adalah
seperti ini.
function namafungsi(parameter1, parameter2, ... parameter n )
	{
		pernyataan berupa perintah operasi program;
	}
-->
<?php
// pertama kita terlebih dahulu mendefinisikaan fungsinya,
// kemudian mengisi fungsi tersebut dengan sederetan perintah
	function testing()
			{
				echo "Contoh menggunakan Fungsi";
			}
// untuk dapat menggunakan fungsi yang telah dibuat,
// perlu pemanggilan nama fungsinya.
testing();
?>


<!--******************************
Menggunakan parameter dalam fungsi
Parameter mewakili variable yang nilainya akan diolah. untuk menggunakan parameter
contohnya adalah seperti ini :-->
<?php
function testing2($nilai)
		{
			echo "Tinggi badan anda adalah".$nilai ;
		}
$tinggibadan = 170 ;
testing2($tinggibadan);
?>

<!--******************************-->
<?php
function penjumlahan($nilai1, $nilai2)
{
$total = $nilai1+$nilai2;
echo $nilai1."+".$nilai2."=".$total;
}
penjumlahan(30,20);
?>
