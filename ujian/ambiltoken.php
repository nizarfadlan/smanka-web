<?php 
 


 

 
include "system/koneksi.php";
 
 $sql = "SELECT * FROM ijin WHERE id_token='token123' ";
 

 $r = mysqli_query($kon,$sql);
 
 $res = mysqli_fetch_array($r);
 
  $result = array();
 
 if(sizeof($res)>0){
	
    array_push($result,array(

 "token"=>$res['token']

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
 


?>
