<?php 
 if(isset($_GET['ira'])) {
if($_GET['ira']=='987829837578756579'){

 
if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $username  = $_POST['masuk'];
 $password  = $_POST['mlebu'];
 
include "../system/koneksi.php";
 
 $sql = "SELECT * FROM peserta WHERE username='".$username."' and password ='".$password."'";
 

 $r = mysqli_query($kon,$sql);
 
 $res = mysqli_fetch_array($r);
 $hasilnya=mysqli_num_rows($r);
  $result = array();
 
 if($hasilnya>0){
	 mysqli_query($kon, "update peserta set aktif='Y' where nis='$res[nis]' ");
    array_push($result,array(

 "password"=>$res['password'],
 "nama"=>$res['nama'],
  "kelas"=>$res['kelas'],
 "username"=>$res['username'],
  "nis"=>$res['nis'],
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
 
}else{
}
 }
?>
