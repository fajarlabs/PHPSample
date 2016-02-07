<!--
Nilai awal
While (batas pengulangan)
{
pernyataan;
operator decrement/increment;
}
-->

<?php
$x = 1;
while ($x<= 100)
		{
			echo "Angka $x";
			$x++; // jika tidak ada operator increment atau decrement
			// maka proses akan
			// terus menerus terjadi tanpa berhenti
		}
?>