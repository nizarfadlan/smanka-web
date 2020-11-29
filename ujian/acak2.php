<?php
include "system/koneksi.php";

$stat=$_GET['stat'];

mysqli_query($kon, "UPDATE acak SET aktif='$stat'")
								 or die ("SQL Error: ".mysql_error());

header ("location:admin.php?bagian=acak");


?>