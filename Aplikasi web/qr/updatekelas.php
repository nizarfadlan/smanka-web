<?php
include "koneksi.php";

mysqli_query($kon, "UPDATE kelas SET 
								kelas='$_POST[kelas]'
							
								
								where id='$_POST[id_anggota]'")
							 or die ("SQL Error: ".mysql_error());


echo "<script>;window.location='home.php?state=daftarkelas'</script>";

?>