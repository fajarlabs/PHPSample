<?php
$email = $_POST['email'];
if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email))
	{
			echo "Alamat Email anda Salah ...";
	}
else
	{
			echo "Alamat Email yang anda masukkan adalah $email";
	}
?>