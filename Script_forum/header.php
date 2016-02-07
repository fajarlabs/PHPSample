<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
 	<title>Forum Diskusi Komunitas Lokomedia</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
  <div id="header"></div>
	<div id="wrapper">
	<div id="menu">
		<a class="item" href="index.php">Beranda</a> -
		<a class="item" href="buat_topik.php">Membuat Topik Baru</a> 
		
		<div id="userbar">
		<?php
		error_reporting(0);
		if($_SESSION['signed_in']){
			echo "Username <b>$_SESSION[username]</b> | <a class=item href=signout.php>Keluar</a>";
		}
		else{
			echo "<a class=item href=signin.php>Login</a> atau <a class=item href=signup.php>Daftar</a>";
		}
		?>
		</div>
	</div>
		<div id="content">
