<html>



	<table cellspacing="2" cellpadding="2" border="1" hidden>
	<tr align="center">
	    <td><B>UserID</B></td>
	    <td width="200"><B>Tanggal & Jam</B></td>
	    <td><B>Verifikasi</B></td>
	    <td><B>Status</B></td>
		 
		
	</tr>
	<?
	$Key=0;
	$Connect = fsockopen("192.168.1.191", "80", $errno, $errstr, 1);
	if($Connect){
		$soap_request="<GetAttLog><ArgComKey xsi:type=\"xsd:integer\">".$Key."</ArgComKey><Arg><PIN xsi:type=\"xsd:integer\">All</PIN></Arg></GetAttLog>";
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
	$buffer=Parse_Data($buffer,"<GetAttLogResponse>","</GetAttLogResponse>");
	$buffer=explode("\r\n",$buffer);
	for($a=0;$a<count($buffer);$a++){
		$data=Parse_Data($buffer[$a],"<Row>","</Row>");
		$PIN=Parse_Data($data,"<PIN>","</PIN>");
		$DateTime=Parse_Data($data,"<DateTime>","</DateTime>");
		$Verified=Parse_Data($data,"<Verified>","</Verified>");
		
		$Status=Parse_Data($data,"<Status>","</Status>");
		
		include "koneksi.php";
		
	
		$login1=mysql_query("select * from temp where id_anggota='$PIN' and tanggal_jam='$DateTime'");
		$ketemu1=mysql_num_rows($login1);
		$f=mysql_fetch_array($login1);
		
 			if ($ketemu1>0){
							
			}else{
					if($PIN==0){
					}else{
//	$carinama=mysql_query("select * from temp where id_anggota='$PIN'");
//	$j=mysql_fetch_array($carinama);
	$waktu = substr($DateTime, 11, 8);
	$bulan = substr($DateTime, 0, 10);
mysql_query("INSERT INTO temp(id_anggota,tanggal_jam,verifikasi,status,tanggal,jam) VALUES ('$PIN','$DateTime', '$Verified' , '$Status' , '$bulan' , '$waktu')")or die ("Query Gagal ".mysql_error());
	

					}
					}
		
	?>
	<tr align="center">
		    <td><?echo $PIN?></td>
		    <td><?=$DateTime?></td>
		    <td><?=$Verified?></td>
		    <td><?=$Status?></td>
			
		</tr>
	<?}?>
	</table>


</body>
</html>
