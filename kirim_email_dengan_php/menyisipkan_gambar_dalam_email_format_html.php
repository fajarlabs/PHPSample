<?php
$to = "alkemail@gmail.com";
$subject = "Email Contoh";
$message = "<h1>Ini adalah email Contoh</h1>... <br />Tutorial Terbaru
Web Development silahkan kunjungi ...
<a href = 'http://www.ilmuwebsite.com' >
Ilmuwebsite.com </a> <br />
<img src='http://xxx.xxxx.xxxx'/>";
// Always set content-type when sending HTML email
$header = "MIME-Version: 1.0" . "\r\n";
$header .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$header .= 'From: <alk@bytehouse.com>'. "\r\n";
$header .= 'Cc: <myboss@example.com>' . "\r\n";
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