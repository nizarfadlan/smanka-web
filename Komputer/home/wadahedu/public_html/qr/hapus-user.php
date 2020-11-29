<?

$IP='192.168.1.191';
$Key='0';
$id=$_GET['ide'];
$fn='0';

	$Connect = fsockopen($IP, '80', $errno, $errstr, 1);
	if($Connect){
		$soap_request="<DeleteUser><ArgComKey xsi:type=\"xsd:integer\">".$Key."</ArgComKey><Arg><PIN xsi:type=\"xsd:integer\">".$id."</PIN></Arg></DeleteUser>";
		$newLine="\r\n";
		fputs($Connect, "POST /iWsService HTTP/1.0".$newLine);
	    fputs($Connect, "Content-Type: text/xml".$newLine);
	    fputs($Connect, "Content-Length: ".strlen($soap_request).$newLine.$newLine);
	    fputs($Connect, $soap_request.$newLine);
		$buffer="";
		while($Response=fgets($Connect, 1024)){
			$buffer=$buffer.$Response;
		}
	}else echo "Koneksi Gagal";
	include("parse.php");
	//echo $buffer;
	$buffer=Parse_Data($buffer,"<DeleteUserResponse>","</DeleteUserResponse>");
	$buffer=Parse_Data($buffer,"<Information>","</Information>");
	echo "<B>Result:</B><BR>".$buffer;
	
	include "koneksi.php";

 
 mysqli_query($kon, "delete from anggota where id_anggota='$id'")
										or die (mysqli_error() );
	echo "<script>;window.location='home.php?state=hapus'</script>";	
?>

