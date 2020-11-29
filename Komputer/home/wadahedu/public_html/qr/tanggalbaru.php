<?php 
/** format tanggal Indo**/
 
date_default_timezone_set('Asia/Jakarta');
function tgl_ind($date) {
 
/** ARRAY HARI DAN BULAN**/	
		$Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
		$Bulan = array("Januari","Febuari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
		
/** MEMISAHKAN FORMAT TANGGAL, BULAN, TAHUN, DENGAN SUBSTRING**/		
	$tahun = substr($date, 0, 4);
	$bulan = substr($date, 5, 2);
	$tgl = substr($date, 8, 2);
	$waktu = substr($date, 11, 8);		
	$hari = date("w", strtotime($date));
	
	$result = $Hari[$hari].", ".$tgl."-".$Bulan[(int)$bulan-1]."-".$tahun." ".$waktu."";
	return $result;
	} 

 function hari($date3) {
 
/** ARRAY HARI DAN BULAN**/	
		$Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
		
/** MEMISAHKAN FORMAT TANGGAL, BULAN, TAHUN, DENGAN SUBSTRING**/		
	$tahun = substr($date3, 0, 4);
	$bulan = substr($date3, 5, 2);
	$tgl = substr($date3, 8, 2);
	$waktu = substr($date3, 11, 8);		
	$hari = date("w", strtotime($date3));
	
	$result = $Hari[$hari];
	return $result;
	} 
	
function bulan($date2) {
 

		$Bulan = array("Januari","Febuari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
		
/** MEMISAHKAN FORMAT TANGGAL, BULAN, TAHUN, DENGAN SUBSTRING**/		
	$tahun = substr($date2, 0, 4);
	$bulan = substr($date2, 5, 2);
	$tgl = substr($date2, 8, 2);

	
	
	$result = $tgl." ".$Bulan[(int)$bulan-1]." ".$tahun;
	return $result;
	} 

function jam($date1) {
 

	$tgl = substr($date1, 8, 2);
	$waktu = substr($date1, 11, 8);		
	
	
	$result = $waktu;
	return $result;
	} 

?>