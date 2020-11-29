<?php 
 

 
if($_SERVER['REQUEST_METHOD']=='GET'){
 
 $nis = $_GET['username'];
 
 
include "../system/koneksi.php";
 
 $sql = "SELECT * FROM nilai WHERE nis='".$nis."' ";
 

 $r = mysqli_query($kon,$sql);
 
 $res = mysqli_fetch_array($r);
 $dapat=mysqli_num_rows($r);
  $result = array();
 
 if($dapat>0){
	
    array_push($result,array(

 "jumlah"=>$res['jumlah'],
 "sementara"=>$res['sementara'],
 

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
