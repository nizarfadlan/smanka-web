<?php
include "koneksi.php";
$IP="192.168.1.191";
$Key="0";


$qa=mysql_query("select * from anggota where id_anggota='$_GET[ide]' ");
$w=mysql_fetch_array($qa);
$idanggota=$w['id_anggota'];
$namanya=$w['nama'];

	$Connect = fsockopen($IP, '80', $errno, $errstr, 1);
	if($Connect){
		$id=$idanggota;
		$nama=$namanya;
		$soap_request='<SetUserInfo><ArgComKey Xsi:type=\"xsd:integer\">'.$Key.'</ArgComKey><Arg><PIN>'.$id.'</PIN><Name>'.$nama.'</Name></Arg></SetUserInfo>';
		$newLine="\r\n";
		fputs($Connect, 'POST /iWsService HTTP/1.0'.$newLine);
	    fputs($Connect, 'Content-Type: text/xml'.$newLine);
	    fputs($Connect, 'Content-Length: '.strlen($soap_request).$newLine.$newLine);
	    fputs($Connect, $soap_request.$newLine);
		$buffer='';
		while($Response=fgets($Connect, 1024)){
			$buffer=$buffer.$Response;
		}
	}else echo "Koneksi Gagal";
		
echo "<script>;window.location='home.php?state=upload'</script>";

?>


