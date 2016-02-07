<?php
$nama = 'Anggie';
if ($nama == "Anggie")
		{
			echo "<p>Hei ".$nama."</p>";
		}
else
		{
			echo "<h2>Anda bukan Anggie!</h2>";
		}
		
// masih dengan contoh yang sama,
// namun dengan cara penulisan yang berbeda

if ($_POST['nama'] == "Anggie")
	   {
			echo "<p>";
			echo "Hei ";
			echo $_POST['nama'];
			echo "</p>";
	   }
else
	   {
echo "<h2>";
echo "Anda bukan Anggie!";
echo "</h2>";
	   }
?>