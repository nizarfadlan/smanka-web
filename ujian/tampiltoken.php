<?php

include "system/koneksi.php";
	
	
	
	$ambiltoken=mysqli_query($kon, "select * from ijin where id_token='token123'");
		$gg=mysqli_fetch_array($ambiltoken);
	echo "
$gg[token] ";
	
		
?>