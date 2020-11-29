<?php
include "system/koneksi.php";
$kode=$_GET['kirim'];
$spesial=substr($kode,0,1);
$mapel=substr($kode,1);
$nama=$mapel.'jawaban';
$pels=mysqli_query($kon, "select * from ujian where id_mapel='$mapel'");
$ret=mysqli_fetch_array($pels);
$pelajaran=$ret['mapel'];
$kkl=mysqli_query($kon, "select kkm from test where id_test='1'");
$gf=mysqli_fetch_array($kkl);

$kkm=$gf['kkm'];

header("Content-type: application/vnd-ms-excel");
 

header("Content-Disposition: attachment; filename=Analisis_Test_$pelajaran.xls");


if($spesial==1){
	$tabel1='soalmtk'; 
	$tabel2='soalmtkessay';
}else if($spesial==2){
	$tabel1='soalinggris'; 
	$tabel2='soallistening';
}else if($spesial==4){
	$tabel1='soalpg'; 


}else {
	$tabel1='soal';
}

if($spesial==4){
	$tinggi=$ret['jumlah_soal']; 


}else{
$rk=mysqli_query($kon, "select max(urutan) as tertinggi from $nama");
 $yu=mysqli_fetch_array($rk);
 $tinggi=$yu['tertinggi'];

}


 
echo " 
 <center>  Analisis Hasil Test </center>
        <table>
        <tr><td>Mata Pelajaran </td><td>: $pelajaran</td></tr>
        <tr><td>Kelas</td><td> : $ret[kelas]</td></tr>
        </table><br> 

<table border='1'>
<tr><th rowspan='2'>No.</th><th rowspan='2'>Nama</th><th rowspan='2'>NIS</th><th colspan='$tinggi'> Nomer Soal / Kunci Jawaban </th> <th rowspan='2'>Jml Skor</th><th rowspan='2'>% Ketercapaian</th><th rowspan='2'>Ketuntasan</th></tr>";

for ($i=1 ; $i<=$tinggi ; $i++ ){
	$bb=mysqli_query($kon, "select kunci from $nama where tanya='$i'");
 $b=mysqli_fetch_array($bb);

	echo "
	<th align='center'>$i <br> $b[kunci]</th>

	";
	
	
}

 echo "



 ";    

$selesai=mysqli_query($kon, "select * from selesai where id_mapel='$mapel' order by no_ujian");
$no=1;
while($j=mysqli_fetch_array($selesai)){

$namawww=mysqli_query($kon,"select nama, nis from peserta where no_ujian='$j[no_ujian]'");
$y=mysqli_fetch_array($namawww);



echo "
			
  <tr><td>$no</td><td>$y[nama]</td><td>$y[nis]</td>   ";   

for ($c3=1 ; $c3<=$tinggi ; $c3++ ){
	$bbc=mysqli_query($kon, "select nilai from $nama where user='$j[no_ujian]' and tanya='$c3'");
$yq=mysqli_fetch_array($bbc);

$betul=mysqli_query($kon,"select sum(nilai) as jmlbetul from $nama where user='$j[no_ujian]'");
$jm=mysqli_fetch_array($betul);	

	echo "
	<td align='center'>$yq[nilai]</td>

	";
	
	
}
   $nilai= ($jm['jmlbetul'] /  $tinggi) * 100 ;   

   if($nilai < $kkm){
   	$ket='Tidak';
   }else{
$ket='Ya';
   }
echo " 
<td>$jm[jmlbetul]</td><td>$nilai</td><td>$ket</td></tr>
";		


$no++;
}


echo "

</table>

<br><br>  Daftar siswa tidak tuntas 

 <table border='1'>
<tr><th>No.</th><th>Nama</th><th> NIS </th> <th> Nilai </th></tr>";



$raport=mysqli_query($kon, "select * from raport where nilai < '$kkm' and pelajaran ='$pelajaran'");

$noww=1;
while($j1=mysqli_fetch_array($raport)){

$n=mysqli_query($kon,"select nama,nis from peserta where no_ujian='$j1[no_ujian]'");
$y23=mysqli_fetch_array($n);

	echo "

<tr><td>$noww</td><td>$y23[nama]</td><td>$y23[nis]</td><td>$j1[nilai]</td></tr>
";

$noww++;
}



	echo "</table>";		
		
		

?>