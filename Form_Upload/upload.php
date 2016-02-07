<?php
// ketika filenya dikirim ...
if ( isset( $_FILES['file'] ) ) 
			{
				// file yang dikirim memiliki atribut sesuai dengan nama input file
				// pada formnya
				// tadi saya membuat input file upload dengan nama file
				// sehingga dalam mengakses nama file tersebut
				// kita cukup memanggil $_FILES['file']['nama']
				// seperti ini
				echo "name: ". $_FILES['file']['name']."<br />";
				// begitu juga jika ingin mengetahui atribut yang lain seperti sizenya,
				// tmp_namenya,
				// type data yang di upload...
				// dan lain lain sebagainya ..
				echo "size: ". $_FILES['file']['size']." bytes<br />";
				echo "temp name: ".$_FILES['file']['tmp_name']."<br />";
				echo "type: ". $_FILES['file']['type']."<br />";
				echo "error: ". $_FILES['file']['error']."<br />";
				// lakukan pemilihan file
				// disini hanya dapat menerima file dengan tipe image/jpeg
				// atau gmabar ...
				// jika gambar yang di upload itu bertipe jpep atau gambar
								if ( $_FILES['file']['type'] == ("image/jpeg"||"image/png")) 
										{
											// kemudian ambil letak file temporary,
											// ini dilakukan karena ketika file itu di upload
											// server php dalam hal ini apache secara otomatis meletakkannya
											// sebagai temporary file
											$source = $_FILES['file']['tmp_name'];
											// kemudian buat target atau akan di letakkan di mana file tersebut
											$target = "./upload/".$_FILES['file']['name'];
											// setelah file temporarinya sudah di definisikan
											// dan kemudian file tujuan akhir, atau akan di letakkan di mana file
											// yang akan di upload tadi
											// selanjutnya adalah memindahkan file temporari tersebut ke dalam
											// folder tujuan, yakni folder upload
											move_uploaded_file( $source, $target );
											// untuk mendapatkan ukuran atau size dari image yang di upload ...
											$size = getImageSize( $target );
											// kemudian tampilkan image yang telah di upload tersebut ke dalam
											// halaman yang saat ini di akses ...
											// dalam hal ini file tersebut adalah upload.php
											$imageupload = "<p><img width=\"$size[0]\" height=\"$size[1]\" src=\"$target\" alt=\"uploaded image\" /></p>";
											echo $imageupload;
										}
			}
?>