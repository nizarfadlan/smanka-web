<?php
include "koneksi.php";

mysql_query("UPDATE anggota SET nama='$_POST[nama]',
								nis='$_POST[nis]',
								kelas='$_POST[kelas]'
							
								
								where id_anggota='$_POST[id_anggota]'")
							 or die ("SQL Error: ".mysql_error());


echo "<script>;window.location='home.php?state=daftar'</script>";

?>