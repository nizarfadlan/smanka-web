<?php
include "../system/koneksi.php";
$email = $_GET['username'];
$password = $_GET['password'];

$login=mysqli_query($kon, "select * from peserta where username='$email' and password='$password'");
$find=mysqli_num_rows($login);
$a=mysqli_fetch_array($login);
	
	if ($find>0){
	
	
	echo "<script>;window.location='index.php?user=$a[username]&pass=$a[password]'</script>";
}else{
	echo "
				GAGAL  LOGIN $email dan $password
			";

}












?>