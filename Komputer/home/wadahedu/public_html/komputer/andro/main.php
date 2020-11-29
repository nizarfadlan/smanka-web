<?php 
 if(isset($_GET['ira'])) {
if($_GET['ira']=='9878298de37t554g78756579'){

 
if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $username  = $_POST['ovella2'];
 
 
include "../system/koneksi.php";
 
 $sql = "SELECT id,ad,username FROM peserta WHERE username='".$username."' ";
 

 $r = mysqli_query($kon,$sql);
 
 $res = mysqli_fetch_array($r);
 $hasilnya=mysqli_num_rows($r);
  $result = array();
 
 if($hasilnya>0){
	
    array_push($result,array(


  "id"=>$res['id'],
  "ad"=>$res['ad']

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
 
}
 }
?>
