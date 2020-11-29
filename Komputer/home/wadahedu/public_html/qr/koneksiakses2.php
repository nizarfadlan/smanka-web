<?php


   
    $db = 'c:/xampp/htdocs/fingersmanka/att2000.mdb';
    if(!file_exists($db)){
     die("No DB.");
    }
    $conn = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=".$db."; Uid=; Pwd=;");

     
    $com1 = "select * from CHECKINOUT";
    $res1 = $conn->query($com1);
    while($row1 = $res1->fetch()){
			include "koneksi.php";
				

		
		$PIN=$row1['USERID'];
		$DateTime=$row1['CHECKTIME'];
	$status1=$row1['CHECKTYPE'];
	if($status1=='O'){
			$status='1';
		
	}
	if($status1=='I'){
		$status='0';
		
	}
	
		$login1=mysql_query("select * from temp where id_anggota='$PIN' and tanggal_jam='$DateTime'");
		$ketemu1=mysql_num_rows($login1);
		$f=mysql_fetch_array($login1);
		
 			if ($ketemu1>0){
					
			}else{
		
//	$carinama=mysql_query("select * from temp where id_anggota='$PIN'");
//	$j=mysql_fetch_array($carinama);
	$waktu = substr($DateTime, 11, 8);
	$bulan = substr($DateTime, 0, 10);
mysql_query("INSERT INTO temp(id_anggota,tanggal_jam,verifikasi,status,tanggal,jam) VALUES ('$PIN','$DateTime', '1' , '$status' , '$bulan' , '$waktu')")or die ("Query Gagal ".mysql_error());
		

					}
		
	
    }
    ?>
