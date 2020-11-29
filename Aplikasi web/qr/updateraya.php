<?php
include "koneksi.php";

mysqli_query($kon, "UPDATE hari_besar SET keterangan='$_POST[keterangan]'
								
								
								where tanggal='$_POST[tanggal]'")
							 or die ("SQL Error: ".mysqli_error());

echo "<script>;window.location='home.php?state=haribesar'</script>";

?>