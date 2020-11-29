<?php

header("refresh: 15"); 
    
include "koneksi.php";
include "code/phpqrcode/qrlib.php";

function get_token($panjang){ 
$token = array( range('A','Z') ); 
$karakter = array(); 
foreach($token as $key=>$val){ foreach($val as $k=>$v){ $karakter[] = $v; } } $token = null; for($i=1; $i<=$panjang; $i++){ 

$token .= $karakter[rand($i, count($karakter) - 1)]; } return $token; } 

$nilaitoken=get_token(15);
$nilaitoken1=$nilaitoken.'png';
mysqli_query($kon,"update qrcode set qrcode2='$nilaitoken', gambar2='$nilaitoken1' where id_qr='e'");



$eko=mysqli_query($kon, "select * from qrcode where id_qr='e'");
$ek=mysqli_fetch_array($eko);










$hasil=$ek['qrcode2'];
QRcode::png("$hasil", "siswa2.png", "L", 8, 8);




echo"

<div class=qr'><img src='siswa2.png' width='500px'></div>






";


?>