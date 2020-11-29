<?php
include "koneksi.php";
include "thumbs2.php";
		$file  = $_FILES['file4']['name'];

		if(empty($file)){
mysqli_query($kon, "UPDATE anggota SET nama='$_POST[nama]',
								nis='$_POST[nis]',
								kelas='$_POST[kelas]',
								username='$_POST[username]',
								password='$_POST[password]'
							
								
								where id_anggota='$_POST[id_anggota]'")
							 or die (mysqli_error($kon));
}else{
	mysqli_query($kon, "UPDATE anggota SET nama='$_POST[nama]',
								nis='$_POST[nis]',
								kelas='$_POST[kelas]',
								username='$_POST[username]',
								password='$_POST[password]',
								foto='$file'
							
								
								where id_anggota='$_POST[id_anggota]'")
							 or die (mysqli_error($kon));
}

echo "<script>;window.location='home.php?state=daftar'</script>";

?>