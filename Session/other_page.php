<?php
session_start();
echo "Anda telah membuat session di halaman sebelumnya, berisi '<strong>" . $_SESSION['first']."</strong>'";
//session_destroy();
?>