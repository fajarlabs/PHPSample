<?php
/*
a \-> am atau pm
A \-> AM atau PM
d \-> Tanggal
D \-> Nama hari dalam seminggu
F \-> Nama bulan
g \-> jam 1 sampai 12 (1..12)
G \-> jam 1 sampai 23 (0..23)
h \-> jam 1 sampai 12 (01..12)
H \-> jam 1 sampai 23 (OO..23)
i \-> menit
j \-> Tanggal
l \-> Nama Hari
m \-> Bulan (dalam angka)
M \-> Bulan (singkatan dari nama bulan)
n \-> Nama bulan (1..12)
O \-> waktu greenwich
r \-> format RFC 822 (Sun, 25 Agustus 2002 16:01:07+0200
s \-> detik (00..59)
T \-> Timezone (DMT)
y \-> tahun dalam dua digit
Y \-> tahun dalam empat digit
z \-> hari ke x dari tahun
*/

echo date("a")."<br>";
echo date("A")."<br>";
echo date("d")."<br>";
echo date("D")."<br>";
echo date("F")."<br>";
echo date("g")."<br>";
echo date("G")."<br>";
echo date("h")."<br>";
echo date("H")."<br>";
echo date("i")."<br>";
echo date("j")."<br>";
echo date("l")."<br>";
echo date("m")."<br>";
echo date("M")."<br>";
echo date("n")."<br>";
echo date("O")."<br>";
echo date("r")."<br>";
echo date("s")."<br>";
echo date("T")."<br>";
echo date("y")."<br>";
echo date("Y")."<br>";
echo date("z")."<br>";
echo "<br>";
?>

<?php
echo "Sekarang waktu menunjukkan pukul ", date("H:i A"),
"<br>", date("l, d F Y"),
"<br>Hari ke : ", date("z"), " dari tahun ", date("Y");
?>