<?php
include "system/koneksi.php";

$mapel=$_GET['mapel'];
$stat=$_GET['stat'];

mysqli_query($kon, "UPDATE ujian SET aktif='$stat'								
								where id_mapel='$mapel'")
								 or die ("SQL Error: ".mysql_error());

header ("location:admin.php?bagian=status");


?>