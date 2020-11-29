<?php

include "koneksi.php";


	
	
	
	
	$Key=0;
	$Connect = fsockopen("192.168.1.192", "80", $errno, $errstr, 1);
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
	$angka=mysql_query("select MAX(tanggal_jam) as tertinggi from finger2");
	$o=mysql_fetch_array($angka);
	$nilaiatas=$o[tertinggi];
	include("parse.php");
	$buffer=Parse_Data($buffer,"<GetAttLogResponse>","</GetAttLogResponse>");
	$buffer=explode("\r\n",$buffer);
	for($a=0;$a<count($buffer);$a++){
		$data=Parse_Data($buffer[$a],"<Row>","</Row>");
		$PIN=Parse_Data($data,"<PIN>","</PIN>");
		$DateTime=Parse_Data($data,"<DateTime>","</DateTime>");
		
		if($DateTime>$nilaiatas){
		include "koneksi.php";
		
	
	$waktu = substr($DateTime, 11, 8);
	$bulan = substr($DateTime, 0, 10);
mysql_query("INSERT INTO finger2(id_anggota,tanggal_jam,tanggal,jam,bayangan) VALUES ('$PIN','$DateTime', '$bulan' , '$waktu', '$waktu')")or die ("Query Gagal ".mysql_error());
mysql_query("INSERT INTO temp(id_anggota,tanggal_jam,tanggal,jam,bayangan) VALUES ('$PIN','$DateTime', '$bulan' , '$waktu', '$waktu')")or die ("Query Gagal ".mysql_error());
	
	}
	}
	
	
	
	
	
	
	
	
	$Key=0;
	$Connect = fsockopen("192.168.1.193", "80", $errno, $errstr, 1);
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
	$angka=mysql_query("select MAX(tanggal_jam) as tertinggi from finger3");
	$o=mysql_fetch_array($angka);
	$nilaiatas=$o[tertinggi];
	include("parse.php");
	$buffer=Parse_Data($buffer,"<GetAttLogResponse>","</GetAttLogResponse>");
	$buffer=explode("\r\n",$buffer);
	for($a=0;$a<count($buffer);$a++){
		$data=Parse_Data($buffer[$a],"<Row>","</Row>");
		$PIN=Parse_Data($data,"<PIN>","</PIN>");
		$DateTime=Parse_Data($data,"<DateTime>","</DateTime>");
		
		if($DateTime>$nilaiatas){
		include "koneksi.php";
		
	
	$waktu = substr($DateTime, 11, 8);
	$bulan = substr($DateTime, 0, 10);
mysql_query("INSERT INTO finger3(id_anggota,tanggal_jam,tanggal,jam,bayangan) VALUES ('$PIN','$DateTime', '$bulan' , '$waktu', '$waktu')")or die ("Query Gagal ".mysql_error());
mysql_query("INSERT INTO temp(id_anggota,tanggal_jam,tanggal,jam,bayangan) VALUES ('$PIN','$DateTime', '$bulan' , '$waktu', '$waktu')")or die ("Query Gagal ".mysql_error());
	
	}
	}
	
	
	
	
	
	$Key=0;
	$Connect = fsockopen("192.168.1.194", "80", $errno, $errstr, 1);
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
	$angka=mysql_query("select MAX(tanggal_jam) as tertinggi from finger4");
	$o=mysql_fetch_array($angka);
	$nilaiatas=$o[tertinggi];
	include("parse.php");
	$buffer=Parse_Data($buffer,"<GetAttLogResponse>","</GetAttLogResponse>");
	$buffer=explode("\r\n",$buffer);
	for($a=0;$a<count($buffer);$a++){
		$data=Parse_Data($buffer[$a],"<Row>","</Row>");
		$PIN=Parse_Data($data,"<PIN>","</PIN>");
		$DateTime=Parse_Data($data,"<DateTime>","</DateTime>");
		
		if($DateTime>$nilaiatas){
		include "koneksi.php";
		
	
	$waktu = substr($DateTime, 11, 8);
	$bulan = substr($DateTime, 0, 10);
mysql_query("INSERT INTO finger4(id_anggota,tanggal_jam,tanggal,jam,bayangan) VALUES ('$PIN','$DateTime', '$bulan' , '$waktu', '$waktu')")or die ("Query Gagal ".mysql_error());
mysql_query("INSERT INTO temp(id_anggota,tanggal_jam,tanggal,jam,bayangan) VALUES ('$PIN','$DateTime', '$bulan' , '$waktu', '$waktu')")or die ("Query Gagal ".mysql_error());
	
	}
	}
	
	
	
	
	$Key=0;
	$Connect = fsockopen("192.168.1.195", "80", $errno, $errstr, 1);
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
	$angka=mysql_query("select MAX(tanggal_jam) as tertinggi from finger5");
	$o=mysql_fetch_array($angka);
	$nilaiatas=$o[tertinggi];
	include("parse.php");
	$buffer=Parse_Data($buffer,"<GetAttLogResponse>","</GetAttLogResponse>");
	$buffer=explode("\r\n",$buffer);
	for($a=0;$a<count($buffer);$a++){
		$data=Parse_Data($buffer[$a],"<Row>","</Row>");
		$PIN=Parse_Data($data,"<PIN>","</PIN>");
		$DateTime=Parse_Data($data,"<DateTime>","</DateTime>");
		
		if($DateTime>$nilaiatas){
		include "koneksi.php";
		
	
	$waktu = substr($DateTime, 11, 8);
	$bulan = substr($DateTime, 0, 10);
mysql_query("INSERT INTO finger5(id_anggota,tanggal_jam,tanggal,jam,bayangan) VALUES ('$PIN','$DateTime', '$bulan' , '$waktu', '$waktu')")or die ("Query Gagal ".mysql_error());
mysql_query("INSERT INTO temp(id_anggota,tanggal_jam,tanggal,jam,bayangan) VALUES ('$PIN','$DateTime', '$bulan' , '$waktu', '$waktu')")or die ("Query Gagal ".mysql_error());
	
	}
	}
	
	
	
	
	
	$Key=0;
	$Connect = fsockopen("192.168.1.196", "80", $errno, $errstr, 1);
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
	$angka=mysql_query("select MAX(tanggal_jam) as tertinggi from finger6");
	$o=mysql_fetch_array($angka);
	$nilaiatas=$o[tertinggi];
	include("parse.php");
	$buffer=Parse_Data($buffer,"<GetAttLogResponse>","</GetAttLogResponse>");
	$buffer=explode("\r\n",$buffer);
	for($a=0;$a<count($buffer);$a++){
		$data=Parse_Data($buffer[$a],"<Row>","</Row>");
		$PIN=Parse_Data($data,"<PIN>","</PIN>");
		$DateTime=Parse_Data($data,"<DateTime>","</DateTime>");
		
		if($DateTime>$nilaiatas){
		include "koneksi.php";
		
	
	$waktu = substr($DateTime, 11, 8);
	$bulan = substr($DateTime, 0, 10);
mysql_query("INSERT INTO finger6(id_anggota,tanggal_jam,tanggal,jam,bayangan) VALUES ('$PIN','$DateTime', '$bulan' , '$waktu', '$waktu')")or die ("Query Gagal ".mysql_error());
mysql_query("INSERT INTO temp(id_anggota,tanggal_jam,tanggal,jam,bayangan) VALUES ('$PIN','$DateTime', '$bulan' , '$waktu', '$waktu')")or die ("Query Gagal ".mysql_error());
	
	}
	}
	
	
	
	
	
	
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
	$angka=mysql_query("select MAX(tanggal_jam) as tertinggi from finger1");
	$o=mysql_fetch_array($angka);
	$nilaiatas=$o[tertinggi];
	include("parse.php");
	$buffer=Parse_Data($buffer,"<GetAttLogResponse>","</GetAttLogResponse>");
	$buffer=explode("\r\n",$buffer);
	for($a=0;$a<count($buffer);$a++){
		$data=Parse_Data($buffer[$a],"<Row>","</Row>");
		$PIN=Parse_Data($data,"<PIN>","</PIN>");
		$DateTime=Parse_Data($data,"<DateTime>","</DateTime>");
		
		if($DateTime>$nilaiatas){
		include "koneksi.php";
		
	
	$waktu = substr($DateTime, 11, 8);
	$bulan = substr($DateTime, 0, 10);
mysql_query("INSERT INTO finger1(id_anggota,tanggal_jam,tanggal,jam,bayangan) VALUES ('$PIN','$DateTime', '$bulan' , '$waktu', '$waktu')")or die ("Query Gagal ".mysql_error());
mysql_query("INSERT INTO temp(id_anggota,tanggal_jam,tanggal,jam,bayangan) VALUES ('$PIN','$DateTime', '$bulan' , '$waktu', '$waktu')")or die ("Query Gagal ".mysql_error());
	
	}
	}
	
	
	
	
	
	?>