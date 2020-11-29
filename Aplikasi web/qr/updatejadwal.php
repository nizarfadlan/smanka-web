<?php
include "koneksi.php";

mysqli_query($kon, "UPDATE jadwal SET jenis='$_POST[jenis]',
								jam_masuk='$_POST[masuk]',
								jam_pulang='$_POST[pulang]'
							
								
								where id='$_POST[id_anggota]'")
							 or die ("SQL Error: ".mysql_error());


echo "<script>;window.location='home.php?state=jadwal'</script>";

?>