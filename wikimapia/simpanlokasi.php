<?php
include "koneksi.php";

$x1 = $_GET['x1'];
$y1 = $_GET['y1'];
$x2 = $_GET['x2'];
$y2 = $_GET['y2'];
$judul = $_GET['judul'];
$des = $_GET['des'];
$warna  = "#".$_GET['wrn'];

$masuk = mysql_query("insert into datapeta
values(null,'$judul','$des',$x1,$y1,$x2,$y2,'$warna')");
if($masuk){
    echo "berhasil";
}else{
    echo "gagal";
}
?>
