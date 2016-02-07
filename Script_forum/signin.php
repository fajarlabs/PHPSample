<?php
include "koneksi.php";
include "header.php";

echo "<h3>Form Login</h3>";

if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true){
	echo "Anda dalam keadaan Login, Anda bisa <a href=signout.php>Keluar</a> kalau Anda mau.";
}
else{
	if($_SERVER['REQUEST_METHOD'] != 'POST'){
		echo "<form method=post action=''>
		     <table>
		     <tr><td>Username</td><td> : <input type=text name=username /></td></tr>
			   <tr><td>Password</td><td> : <input type=password name=password /></td></tr>
			   <tr><td colspan=2><input type=submit value=Login /></td></tr>
			   </table>
		     </form>";
	}
	else{
	  $password=sha1($_POST['password']);
		$sql = "SELECT * FROM	anggota	
           WHERE username='$_POST[username]' AND	password='$password'";
		$hasil = mysql_query($sql);
		$r=mysql_fetch_array($hasil);
		
		if(mysql_num_rows($hasil) == 0){
			echo "Username atau Password Anda tidak benar";
		}
		else{
			$_SESSION['signed_in'] = true;
			$_SESSION['username'] = $r['username'];
			$_SESSION['level'] = $r['level'];
					
			echo "Selamat datang <b>$_SESSION[username]</b> di Forum Lokomedia. <br /><a href=index.php>Halaman Utama Forum</a>.";
		}	
	}
}

include "footer.php";
?>
