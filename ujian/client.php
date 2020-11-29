<?php
include "system/koneksi.php";

$stat=$_GET['stat'];

mysqli_query($kon, "UPDATE client SET aktif='$stat'")
								 or die ("SQL Error: ".mysql_error());

header ("location:admin.php?bagian=client");


?>