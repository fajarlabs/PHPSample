<!-- Membuat dan menghapus file
Untuk membuat file, anda dapat menggunakan fungsi touch(), dan untuk
menghapus file yang ada, anda dapat menggunakan fungsi unlink(); implementasinya
adalah seperti ini, script untuk membuat file : -->

<?php
touch("filecontoh.txt");
if (file_exists("filecontoh.txt"))
	{
		echo "File sudah ada!";
	}
?>