<?php
include "koneksi.php";
$akhir = $_GET['akhir'];
if($akhir==1){
    $query = "SELECT * FROM datapeta ORDER BY nomor DESC LIMIT 1";
}else{
    $query = "SELECT * FROM datapeta";
}
$data = mysql_query($query);

$json = '{"wilayah": {';
$json .= '"petak":[ ';
while($x = mysql_fetch_array($data)){
    $json .= '{';
    $json .= '"id":"'.$x['nomor'].'",
        "judul":"'.htmlspecialchars($x['judul']).'",
        "deskripsi":"'.htmlspecialchars($x['deskripsi']).'",
        "x1":"'.$x['lat1'].'",
        "y1":"'.$x['lng1'].'",
        "x2":"'.$x['lat2'].'",
        "y2":"'.$x['lng2'].'",
        "warna":"'.$x['warna'].'"
    },';
}
$json = substr($json,0,strlen($json)-1);
$json .= ']';

$json .= '}}';
echo $json;

?>
