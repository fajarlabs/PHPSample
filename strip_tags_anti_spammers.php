<?php
$situsspammer = "Silahkan <u>berkunjung</u> ke <a href= 'http://www.tokosandaljepit.com'> 
				 Toko Online Sandal Jepit <strong>Aneka Warna</strong></a>";
				 
// strip_tags(kalimat yang akan di filter, tag yang boleh ditampilkan)
$filterlink = strip_tags($situsspammer, "<strong><u>");
echo $filterlink;
?>