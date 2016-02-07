<!--
Nilai awal
do
{
pernyataan;
operator decrement/increment;
}
While (batas pengulangan)

hampir sama dengan bentuk pengulangan while, namun yang jadi perbedaan di sini
adalah letak dari whilenya saja, dan diakhir dari pengulangan while di beri ; (semicolon).
-->

<?php
$x = 1;
	do
		{
			echo "Angka $x";
			$x++;
		}
while ($x <= 100);
?>