<!-- 
Jika variable itu cuma memiliki satu nilai, maka array memiliki banyak nilai dari
elemen. Array, merupakan suatu kumpulan data variable yang tersusun secara index.

array(elemen)
-->

<? /*
array di mulai dari index urutan 0.
sehingga :
index 0 di miliki oleh array bernilai 1924
index 1 di miliki oleh array bernilai 2010
index 2 di miliki oleh array bernilai 2012
index 3 di miliki oleh array bernilai 2024
index 4 di miliki oleh array bernilai 2050

$tahun[3]; mewakili 2024.
*/
?>

<?php
$tahun = array(1924, 2010, 2012, 2024, 2050);
// $tahun[index_array];
echo $tahun[3]."<br>";
?>

<?php
// Contoh 1
$mahasiswa = array("Loka Dwiartara","Lakilaki","24/01/1987","B",3.41,"Bot Technology");
// Apabila $x<=6 maka yang terjadi "Undefined offset" memori yang kosong, 
// lihat isi dari array hanya 5 dihitung dari o indexnya
for ($x=0; $x<=5; $x++)
{
echo $mahasiswa[$x]."<br>";
}
?>

<?php
$mahasiswa = array("Loka Dwiartara","Lakilaki","24/01/1987","B",3.41,"Bot Technology");
for($x=0; $x<5; $x++)
		{
		// key([$variabel]) digunakan untuk melihat index array
		// current([$variabel]) digunakan untuk melihat isi array
			echo "Index array mahasiswa ke : ".key($mahasiswa)." Berisi ".current($mahasiswa)."<br>";
		// next([$variabel]) digunakan untuk memposisikan array ke selanjutnya
			next($mahasiswa);
		}
?>

<?php
$mahasiswa = array("Loka Dwiartara","Lakilaki","24/01/1987","B",3.41,"Bot Technology");
//Memposisikan array diterakhir
end($mahasiswa);
for($x=0; $x<5; $x++)
{
echo "Index array mahasiswa ke : ".key($mahasiswa)." berisi ".current($mahasiswa)."<br>";
// Memposisikan array ke sebelumnya
// prev([$variabel]) digunakan untuk memposisikan array ke sebelumnya
prev($mahasiswa);
}
echo "<br>";
?>
<!--
dengan end(), maka array akan dibawa ke paling akhir, kemudian di bawa mundur ke
index terendah dengan fungsi prev(). Selain fungsi end(), prev(), dan next(), kita juga
dapat menggunakan fungsi count() yang digunakan untuk menghitung jumlah variable
yang ada dalam array, sebagai contohnya, kita akan menghitung jumlah array yang
berada pada array mahasiswa : -->

<?php
$mahasiswa = array("Loka Dwiartara","Lakilaki","24/01/1987","B",3.41,"Bot Technology");
// Fungsi count digunakan untuk melihat jumlah isi array
$jumlaharray = count($mahasiswa);
echo $jumlaharray;
?>














