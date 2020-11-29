<?php
include "koneksi.php";
$email = $_GET['username'];
$password = $_GET['password'];

$login=mysqli_query($kon, "select * from anggota where username='$email' and password='$password'");
$find=mysqli_num_rows($login);
$a=mysqli_fetch_array($login);
	
	if ($find>0){
	
	
 		echo "<script>;window.location='absen7.php?id=$a[nis]'</script>";
}else{
	echo "
				GAGAL  LOGIN $email dan $password
			";

}












?>