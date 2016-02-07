<!-- Anda dapat menampilkan sebagian isi dari suatu string, mungkin bagi anda yang
pernah membuka suatu situs biasanya di awal situs ditampilkan intro dari suatu artikel,
dengan keterangan read more, atau baca selengkapnya, hal ini menggunakan substr(),
atau untuk memfilter nomor hp, dengan cara tidak menampilkan kesuluruhan nomornya,
kemudian diganti dengan karakter xxx, dan lain sebagainya. 

substr(kalimat, nilai awal, nilai akhir atau range )
-->

<?php
$kalimat = "saya sedang mengetik menggunakan keyboard, guna mempelajari bahasa PHP";
$potongkalimat = substr($kalimat, -3);
echo $potongkalimat."<br>" ;
?>
<!-- Contoh lainnya -->
<?php
$kalimat = "saya sedang mengetik menggunakan keyboard, guna mempelajari bahasa PHP";
$potongkalimat = substr($kalimat, 0, 41);
echo $potongkalimat."<br>";
?>
<!-- Contoh lainnya -->
<?php
$kalimat = "saya sedang mengetik menggunakan keyboard, guna mempelajari
bahasa PHP";
$potongkalimat = substr($kalimat, 5, 6);
echo $potongkalimat ;
?>