<?php
if(isset($_GET['ira'])){
	$ira=$_GET['ira'];
}else{
	$ira='';
}

if($ira=='wrdsfer453445g64ds44fewdfsd'){
include "../system/koneksi.php";
$hapus=mysqli_query($kon, "select * from peserta ");
while($q=mysqli_fetch_array($hapus)){
	
	mysqli_query($kon,"UPDATE peserta SET pin=''
				
							WHERE nis='$q[nis]'")
								 or die (mysqli_error($kon));
}

echo "suksessss";
}else{}
?>