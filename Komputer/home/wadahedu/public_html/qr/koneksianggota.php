<?php


   
    $db = 'c:/xampp/htdocs/fingersmanka/att2000.mdb';
    if(!file_exists($db)){
     die("No DB.");
    }
    $conn = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=".$db."; Uid=; Pwd=;");

     
    $com1 = "select * from USERINFO";
    $res1 = $conn->query($com1);
    while($row1 = $res1->fetch()){
			include "koneksi.php";
				

		
		$PIN=$row1['USERID'];
		$nama=$row1['Name'];

	
		$login1=mysql_query("select * from anggota where id_anggota='$PIN' and nama='$nama'");
		$ketemu1=mysql_num_rows($login1);
		$f=mysql_fetch_array($login1);
		
 			if ($ketemu1>0){
					
			}else{
		
//	$carinama=mysql_query("select * from anggota where id_anggota='$PIN'");
//	$j=mysql_fetch_array($carinama);

mysql_query("INSERT INTO anggota(id_anggota,nama) VALUES ('$PIN','$nama')")or die ("Query Gagal ".mysql_error());
		

					}
		
	
    }
    ?>
