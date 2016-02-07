<?php
include "koneksi.php";
include "header.php";

echo "<h3>Form Pendaftaran</h3>";

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    echo "
    <form method=post action=''>
 	 	<table>
    <tr><td>Username     </td><td> : <input type=text name='username' /></td></tr>
 		<tr><td>Password     </td><td> : <input type=password name='password'></td></tr>
		<tr><td>Nama Lengkap </td><td> : <input type=text name='nama_lengkap'></td></tr>
		<tr><td>E-mail       </td><td> : <input type=text name='email'></td></tr>
 		<tr><td colspan=2><input type=submit value=Daftar /></td></tr>
 	 </table>
    </form>";
}
else{
	  $password=sha1($_POST['password']);
		$sql = "INSERT INTO	anggota(username, password, nama_lengkap, email)
				VALUES('$_POST[username]', '$password', '$_POST[nama_lengkap]', '$_POST[email]')";	
		$hasil = mysql_query($sql);
	  echo "Pendaftaran berhasil. Sekarang Anda bisa <a href=signin.php>Login</a> untuk berdiskusi";
}

include "footer.php";
?>
