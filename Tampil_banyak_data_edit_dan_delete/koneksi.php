<?php
// untuk dapat mengkoneksikan php kepada mysql
// ada 4 informasi yang anda butuhkan,
// pertama adalah host ini adalah nama suatu komputer
// username, ini merupakan username dari mysql server yang telah terinstal
// bersamaan dengan xampp
// password sama dengan username
// dan database apa yang ingin di koneksikan
// defaultnya ketika anda menggunakan xampp maka informasi tersebut berisi
// hostnya adalah localhost, usernamenya adalah root, dan passwordnya itu
// kosong
// sedangkan database yang akan kita koneksikan adalah database mahasiswa yang
// telah kita buat sebelumnya
// oke langsung saja kita ketikan seperti ini
// pertama adalah hostnya
$host = "localhost";

// kemudian adalah username
$username = "root";

// lalu passwordnya
$password = "";

// dan selanjutnya adalah database
$database = "mahasiswa";

// kemudian untuk mengkoneksikannya caranya adalah dengan fungsi mysql_connect
// seperti ini
$koneksi = mysql_connect($host, $username, $password);

// ini berarti tolong koneksikan php kepada mysql dengan informasi host,
// username, dan password
// kemudian untuk memilih database yang akan di koneksikan
// pilihlah database yang ada dalam koneksi yang sedang berlangsung, jika tidak
// bisa maka gagal koneksi
// mudah bukan ???
$pilihdatabase = mysql_select_db($database, $koneksi);
if ($pilihdatabase) 
		{	
			echo "<br>Pesan Database!!! Bahwa koneksi berhasil </br>";
		}
else 
		{
		echo "Gagal Koneksi";
		}
// apabila kita eksekusi di browser, jika koneksi sukses maka tampilannya
// "Berhasil"
// namun jika terdapat komentar Gagal Koneksi, berarti anda belum berhasil
?>