<?php 
 
 
include "../system/koneksi.php";


if(isset($_GET['id'])){
	$id = $_GET['id'] ;
}else{
	$id ='';
}



if($id=='23424234234'){


$nama=mysqli_query($kon, "select * from qrcode where id_qr='e' ");
 $res = mysqli_fetch_array($nama);
 $dapat=mysqli_num_rows($nama);
  $result = array();
 
if($dapat>0){
	 
    array_push($result,array(

 "qr"=>$res['qrcode'],
  "qr1"=>$res['qrcode1'],
   "qr2"=>$res['qrcode2'],
    "qr3"=>$res['qrcode3'],
     "qr4"=>$res['qrcode4']


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
 }

?>
