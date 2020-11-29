<?php

include "koneksi.php";



mysqli_query($kon, "INSERT INTO hari_besar(tanggal,keterangan)VALUES ('$_POST[tgl1]', '$_POST[keterangan]')")or die ("Query Gagal ".mysql_error());

	



echo "<script>;window.location='home.php?state=haribesar'</script>";

?>