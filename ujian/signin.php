<?php 
 

 
if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $username  = $_POST['masuk'];
 $password  = $_POST['mlebu'];
 
include "system/koneksi.php";
 
 $sql = "SELECT * FROM peserta WHERE no_ujian='".$username."' and password ='".$password."'";
 

 $r = mysqli_query($kon,$sql);
 
 $res = mysqli_fetch_array($r);
 
  $result = array();
 
 if(sizeof($res)>0){
	
    array_push($result,array(

 "no_ujian"=>$res['no_ujian']


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
