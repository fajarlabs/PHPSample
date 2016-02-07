<?php
$jarak = 40;
if ($jarak <= 40)
		{
			echo "Jalan kaki saja";
		}
if ($jarak >= 40)
		{
			echo "Naik Motor";
		}
if ($jarak != 40)
		{
			echo "Diam ditempat";
		}
?>

<!------------------------->
<?php
$cuaca = "mendung";
if ($cuaca == "cerah") // jika cuaca cerah
		{
			echo "Saya akan berangkat kuliah";
		}
else
		{
			echo "Saya akan membuat mie ramen";
		}
?>

<?php
$cuaca = "mendung";
if ($cuaca != "cerah") // jika cuaca tidak cerah
		{
			echo "Saya akan membuat mie ramen";
		}
else
		{
			echo "Saya akan berangkat kuliah";
		}
?>