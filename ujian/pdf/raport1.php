<?php
include "../system/koneksi.php";
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


$jawab=mysqli_query($kon, "select * from jawaban inner join $tabel1 on jawaban.tanya=$tabel1.no_soal where jawaban.user='$_GET[user]' and jawaban.id_mapel='$_GET[mapel]' ");
while($q=mysqli_fetch_array($jawab)){
	
	$strhtml .= "
		$q[urutan] . $q[pertanyaan] <br>
		Menjawab : <br>

";

}



require ('mpdf/mpdf.php');

$stylesheet = file_get_contents('css/cetak.css');
$fileName = 'CetakKartu--' . date('d-m-Y') . '-' . date('h.i.s');

$mpdf = new mPDF('utf-8', 'A4', 0, '', 10, 10, 5, 1, 1, 1, '');
//$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($strhtml);
$mpdf->Output('files/' . $fileName. '.pdf','D');


?>