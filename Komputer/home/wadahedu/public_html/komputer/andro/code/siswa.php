<html>
<head>
<meta name="robots" content="noindex,follow,noarchive" />

</head>
<body>
<?php
include "../system/koneksi.php";
include "phpqrcode/qrlib.php";

function get_token($panjang){ 
$token = array( range('A','Z') ); 
$karakter = array(); 
foreach($token as $key=>$val){ foreach($val as $k=>$v){ $karakter[] = $v; } } $token = null; for($i=1; $i<=$panjang; $i++){ 

$token .= $karakter[rand($i, count($karakter) - 1)]; } return $token; } 

$nilaitoken=get_token(15);

mysqli_query($kon,"update qrcode set qrcode='$nilaitoken' where id_qr='e'");



$eko=mysqli_query($kon, "select * from qrcode where id_qr='e'");
$ek=mysqli_fetch_array($eko);










$hasil=$ek['qrcode'];
QRcode::png("$hasil", "absen.png", "L", 8, 8);


?>
</body>
</html>
