<?Php

include "koneksi.php";
 $id = $_POST['idnya'];
 
 mysqli_query($kon, "delete from artikel where id='$id'")
										or die (mysql_error() );
 
	echo "<script>;window.location='home.php?state=pengumuman'</script>";		

?>