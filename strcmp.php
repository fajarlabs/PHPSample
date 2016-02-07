<!-- Menggunakan fungsi starlen untuk membandingkan 2 string, biasanya untuk mencocokkan password
	 atau pencocokan email -->
	 
<?php
$passwordasli = "b3laj@rpHP";
$passwordinput = "belajarPHP";

$cocok = strcmp($passwordasli, $passwordinput);
// Apabila perbandingan string diatas sama maka akan menghasilkan boolean true atau 1
// Implementasi seperti dibawah ini
if ($cocok != 1) // Apabila tidak sama maka muncul " Password anda salah "
	{
		echo "Password anda salah!";
	}
else
	{
		echo "Password anda benar.";
	}
?>