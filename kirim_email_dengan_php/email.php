<?php
/*
untuk mengirim email menggunakan php, syntaxnya adalah seperti ini :
mail(to,subject,message,header,parameter)
*/
$to = "webmaster@localhost";
$subject = "Email Contoh";
$message = "Ini adalah email Contoh ... ";
$header = "From: <fajar@bytehouse.com>";
// kemudian untuk mengirim email
$sent = mail($to, $subject, $message, $header);
if($sent)
		{
			echo "Email contoh sudah terkirim...";
		}
else
		{
			echo "Gagal kirim email!";
		}
?>