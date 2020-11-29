<?php 
 

 
if($_SERVER['REQUEST_METHOD']=='GET'){
 
 $username  = $_GET['username'];
 $password  = $_GET['password'];
 
include "../system/koneksi.php";

$cari=mysqli_query($kon, "SELECT * FROM peserta WHERE no_ujian='$username' and password ='$password'"); 

 $a = mysqli_fetch_array($cari);
 $dapat=mysqli_num_rows($cari);
  $barisan = array();
 
 if($dapat>0){
	 
    array_push($barisan,array(

 "password"=>$a['password'],
 "nama"=>$a['nama'],
 "username"=>$a['no_ujian'],
  "jurusan"=>$a['jurusan'],
 "kelas"=>$a['kelas']
 )
 );
 
 echo json_encode(array("hasil"=>$barisan));
 
	 
 }else {
	 
	 array_push($barisan,array(
     "gagal"=>'hancur',
 
 )
 );
 
 echo json_encode(array("hasil"=>$barisan));
 }
 
 mysqli_close($kon);
 
 }

 
?>
