<?php 
 

 
if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $username  = $_POST['masuk'];
 $password  = $_POST['mlebu'];
 
include "koneksi.php";
 
 $sql = "SELECT * FROM anggota WHERE username='".$username."' and password ='".$password."'";
 

 $r = mysqli_query($kon,$sql);
 
 $res = mysqli_fetch_array($r);
 
  $result = array();
 
 if(sizeof($res)>0){
	
    array_push($result,array(

 "password"=>$res['password'],
 "nama"=>$res['nama'],
  "kelas"=>$res['kelas'],
 "username"=>$res['username'],
  "nis"=>$res['nis'],
  "desa"=>"wadahedukasi.com",
  "desa0"=>"qr",
    "desa1"=>"jhgku45hkj4g43yg43gh.php",
    "desa2"=>"foto.php",
    "desa3"=>"hgffy6666rytyfhf554rtrd5.php",
    "desa4"=>"trrrtrddfhgfghcytfyrty6trtrtr5.php"

 )
 );
 
 echo json_encode(array("result"=>$result));
 
	 
 }else {
	 
	 array_push($result,array(
     "error"=>'error',
 
 )
 );
 
 echo json_encode(array("result"=>$result));
 }
 
 mysqli_close($kon);
 
 }
 

 
?>
