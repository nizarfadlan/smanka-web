<?php
include "koneksi.php";

mysqli_query($kon, "UPDATE izin SET tanggal='$_POST[tgl]',
								izin='$_POST[izin]',
								keterangan='$_POST[keterangan]'
							
								
								where urutan='$_POST[id]'")
							 or die ("SQL Error: ".mysql_error());


echo "<script>;window.location='rekapizin.php'</script>";

?>