<?Php

include "koneksi.php";


 mysqli_query($kon, "update artikel SET judul='$_POST[txtjudul]',
								
								konten='$_POST[txtkonten]'
								where id='$_POST[txtid]'")
								 ;

 
	echo "<script>;window.location='home.php?state=pengumuman'</script>";		

?>