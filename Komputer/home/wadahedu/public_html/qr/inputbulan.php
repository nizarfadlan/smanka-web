<?php
include "koneksi.php";
include "tanggalbaru.php";
$id=$_POST['id_anggota'];
$tahun=$_POST['tahun'];
$bulan=$_POST['bulan'];

$kalender= CAL_GREGORIAN;
$wulan=date('m');
$taun=date('Y');
$jmlhari=cal_days_in_month($kalender, $wulan, $taun);
$akhir=$jmlhari;
$tglawal=$tahun . '-' .$bulan. '-01';


$mulai=$tglawal;
$cek2=mysql_query("select * from kalender where tanggal='$mulai'");
$cari=mysql_num_rows($cek2);
$h=mysql_fetch_array($cek2);

if($cari>0){
	echo "jangan input";
}else {
 for ($i=1 ; $i<=$akhir ; $i++ ){
	 $hari=tgl_ind($mulai);
	 $dina=hari($mulai);
	
	mysql_query("INSERT INTO kalender(tanggal,hari,dina) VALUES ('$mulai','$hari','$dina')")or die ("Query Gagal ".mysql_error());
	

	$mulai++;

}

}
?>