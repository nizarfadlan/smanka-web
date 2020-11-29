<?Php

include "koneksi.php";
 $hari = $_POST['tanggal'];
 
 mysqli_query($kon, "delete from hari_besar where tanggal='$hari'")
										or die (mysql_error() );
 
	echo "<script>;window.location='home.php?state=haribesar'</script>";		

?>