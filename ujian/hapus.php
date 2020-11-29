<?php
include "system/koneksi.php";
$hapus=mysqli_query($kon, "select * from ujian");



mysqli_query($kon, "delete from peserta ")
										or die (mysqli_error($kon) );
										
mysqli_query($kon, "delete from raport ")
										or die (mysqli_error($kon) );										
mysqli_query($kon, "delete from selesai ")
										or die (mysqli_error($kon) );
										
mysqli_query($kon, "delete from soal ")
										or die (mysqli_error($kon) );
mysqli_query($kon, "delete from soalmtk ")
										or die (mysqli_error($kon) );
mysqli_query($kon, "delete from soalmtkessay ")
										or die (mysqli_error($kon) );	
mysqli_query($kon, "delete from soalinggris ")
										or die (mysqli_error($kon) );
mysqli_query($kon, "delete from soallistening ")
										or die (mysqli_error($kon) );

mysqli_query($kon, "delete from soalpg ")
										or die (mysqli_error($kon) );
mysqli_query($kon, "delete from soalpgessay ")
										or die (mysqli_error($kon) );


										
mysqli_query($kon, "delete from status ")
										or die (mysqli_error($kon) );
										
mysqli_query($kon, "delete from ujian ")
										or die (mysqli_error($kon) );
										
mysqli_query($kon, "update cek set jumlah='0' where id_cek='1'")
or die ("SQL Error: ".mysqli_error($kon));	
mysqli_query($kon, "update cek set jumlah='0' where id_cek='2'")
or die ("SQL Error: ".mysqli_error($kon));
mysqli_query($kon, "update cek set jumlah='0' where id_cek='3'")
or die ("SQL Error: ".mysqli_error($kon));
mysqli_query($kon, "update cek set jumlah='0' where id_cek='4'")
or die ("SQL Error: ".mysqli_error($kon));
mysqli_query($kon, "update cek set jumlah='0' where id_cek='5'")
or die ("SQL Error: ".mysqli_error($kon));
mysqli_query($kon, "update cek set jumlah='0' where id_cek='6'")
or die ("SQL Error: ".mysqli_error($kon));
mysqli_query($kon, "update cek set jumlah='0' where id_cek='7'")
or die ("SQL Error: ".mysqli_error($kon));									
					
										
$files=glob('gambar/*');
foreach($files as $file){
if(is_file($file))
unlink($file);
}	
$files=glob('audio/*');
foreach($files as $file){
if(is_file($file))
unlink($file);
}	
 $files=glob('foto/thumbs/*');
foreach($files as $file){
if(is_file($file))
unlink($file);
}	
while($r=mysqli_fetch_array($hapus)){
	$nama=$r['id_mapel'].'jawaban';
	mysqli_query($kon, "DROP TABLE $nama")
	or die (mysqli_error($kon) );
}


										echo "<script>;window.location='admin.php?bagian=home'</script>";

?>