<html>
<head>
<title>Menggunakan Dialog dengan Button</title>
<?php include "Library.php" ?>
<script type="text/javascript">
$("document").ready(function()
						 {
						  $("#kotakdialog").dialog(
													{ modal:true,buttons:{ // Membuat tombol Ya dan aksinya
																		   "Ya, hapus data": function() 
																								   {
																								     $( this ).dialog("close");
																								   },
																		  // Membuat tombol cancel dan aksinya
																		   "Cancel" : function()
																		                    {
																							  $( this ).dialog( "close" );
																							}
																		}
												    }
												);
																		
						 }
					);
</script>
</head>
<body style="font-size:70%;">
<div id="kotakdialog" title="Konfirmasi hapus data">Yakin akan menghapus semua data???
</div>
</body>
</html>