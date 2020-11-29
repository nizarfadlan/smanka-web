<?php
include "system/koneksi.php";
$spesial=$_GET['kode'];

if($spesial==1){
	$tabel1='soalmtk'; 
	$tabel2='soalmtkessay';
}else if($spesial==2){
	$tabel1='soalinggris'; 
	$tabel2='soallistening';
}else {
	$tabel1='soal';
}
	$strhtml .= "
Hasil Test Nomer Ujian $_GET[user] <br><br>
";
$jawab=mysqli_query($kon, "select * from jawaban where user='$_GET[user]' and id_mapel='$_GET[mapel]' order by 1 ASC");
while($q=mysqli_fetch_array($jawab)){
	$muncul=mysqli_query($kon, "select * from $tabel1 where no_soal='$q[tanya]' ");
	$r=mysqli_fetch_array($muncul);
	if(empty($q['jawab'])){
		$jwb='kosong';
	}else{
		$isi=$q['jawab'];
		$jwb=$r[$isi];
	}
	$cari=$q['kunci'];
	$kunci=$r[$cari];
	$strhtml .= "
	<div class='konten'>
		$q[urutan] .  $r[pertanyaan] <br><br>
		Menjawab : . $jwb <br>
		Kunci : $kunci<br><br><br>
</div>
";

}



require ('mpdf/mpdf.php');
$stylesheet = file_get_contents('css/raport.css');
$fileName = 'Laporan Siswa-' . $_GET[user];

$mpdf = new mPDF('utf-8', 'A4', 0, '', 10, 10, 5, 1, 1, 1, '');
//$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($strhtml);
$mpdf->Output('files/' . $fileName. '.pdf','D');


?>