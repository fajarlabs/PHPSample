<!-- Fungsi untuk mengurutkan data dengan menggunakan fungsi sort -->

<?php
$data = array(1,3,2,4,7,8,6,5,9,10);
// Menggunakan fungsi sort untuk mengurutkan data
sort($data);

for($x=0;$x<=10;$x++)
	{
		// Tampilkan isi array
		echo current($data)."<br>";
		// Array selanjutnya
		next($data);
	}
?>