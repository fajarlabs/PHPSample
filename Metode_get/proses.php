<?php
$jumlah_terpilih = count($_GET['lulus']);
for ($x=0;$x<$jumlah_terpilih;$x++) {
echo $_GET['lulus'][$x]."<br /> ";
}
?>