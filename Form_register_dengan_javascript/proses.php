<?php
mysql_connect("localhost","root","");
mysql_select_db("dbajax");

$username = $_GET["kata"];

$sql = mysql_query("select * from anggota where username='$username'");
$jumlah = mysql_num_rows($sql);
if ($jumlah == "0"){
  echo "Username tersedia, boleh digunakan.";
}
else{
  echo "Username <b>$username</b> telah dipakai, gunakan username yang lain.";
}
?>
