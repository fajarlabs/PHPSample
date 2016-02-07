<?php
include "koneksi.php";
include "header.php";

echo "<h3>Logout</h3>";

if($_SESSION['signed_in'] == true){
	$_SESSION['signed_in'] = NULL;
	$_SESSION['username'] = NULL;
	$_SESSION['level'] = NULL;

	echo "Anda telah berhasil Logout";
}
else{
	echo "Anda belum Login. Apakah Anda akan <a href=signin.php>Login</a> ?";
}

include "footer.php";
?>
