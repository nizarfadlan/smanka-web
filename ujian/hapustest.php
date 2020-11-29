<?php
include "system/koneksi.php";
$idmapel=$_GET['mapel'];
$spesial=$_GET['spesial'];
	$nama=$idmapel.'jawaban';
	

if($spesial=='1'){
	mysqli_query($kon, "delete from soalmtk where id_mapel='$idmapel'")
										or die (mysqli_error($kon) );
mysqli_query($kon, "delete from soalmtkessay where id_mapel='$idmapel'")
										or die (mysqli_error($kon) );
									} else if($spesial=='2'){

mysqli_query($kon, "delete from soalinggris where id_mapel='$idmapel'")
										or die (mysqli_error($kon) );
mysqli_query($kon, "delete from soallistening where id_mapel='$idmapel'")
										or die (mysqli_error($kon) );

									} else if($spesial==0){

		mysqli_query($kon, "delete from soal where id_mapel='$idmapel'")
										or die (mysqli_error($kon) );								
									} else if($spesial==4){

		mysqli_query($kon, "delete from soalpg where id_mapel='$idmapel'")
										or die (mysqli_error($kon) );	
mysqli_query($kon, "delete from soalpgessay where id_mapel='$idmapel'")
										or die (mysqli_error($kon) );

									}
										


										
mysqli_query($kon, "delete from ujian where id_mapel='$idmapel'")
										or die (mysqli_error($kon) );
										
	mysqli_query($kon, "DROP TABLE $nama")
	or die (mysqli_error($kon) );							
					
	echo "<script>;window.location='admin.php?bagian=hapustest'</script>";

?>