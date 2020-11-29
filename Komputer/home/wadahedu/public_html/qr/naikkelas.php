<?php
include "koneksi.php";

$cekbox=$_POST['pil'];
$kelas2=$_POST['txtkelas'];

$tampil=str_replace('X' , 'XI', $kelas2 );
$dua=substr($tampil,0,4);
if($dua=='XIII'){
	
			for ($i=0; $i<sizeof($cekbox); $i++){
				
				mysqli_query($kon,"INSERT INTO alumni (id_anggota, nama, nis, kelas)
				SELECT id_anggota, nama, nis, kelas FROM anggota WHERE nis='" . $cekbox[$i] . "' ")
										or die (mysqli_error($kon) );
										
				mysqli_query($kon,"delete from anggota where nis='" . $cekbox[$i] . "' ")
										or die (mysqli_error($kon) );
				mysqli_query($kon,"delete from temp where id_anggota='" . $cekbox[$i] . "' ")
										or die (mysqli_error($kon) );
								
			}
			
	
	
	
}else{
	 for ($i=0; $i<sizeof($cekbox); $i++){
		 
	  $query="UPDATE anggota SET kelas='$tampil' 
	  WHERE nis='" . $cekbox[$i] . "'";     

            mysqli_query($kon,$query) or die (mysqli_error($kon) );
			
			mysqli_query($kon,"delete from temp where id_anggota='" . $cekbox[$i] . "' ")
										or die (mysqli_error($kon) );
        }
}
 echo "<script>;window.location='home.php?state=naik'</script>";	
?>