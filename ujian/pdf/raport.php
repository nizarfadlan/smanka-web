<?php
include "../system/koneksi.php";




$peserta =mysqli_query($kon, "select * from peserta ");
while($kl=mysqli_fetch_array($peserta)){

$user=$kl['no_ujian'];


        $qqq=mysqli_query($kon, "select * from selesai inner join ujian on selesai.id_mapel=ujian.id_mapel where selesai.no_ujian='$user' ");
		while($rt=mysqli_fetch_array($qqq)){
			$nama=$rt['id_mapel'].'jawaban';
			
			$hitung=mysqli_query($kon, "select count($nama.nilai) as jml from $nama WHERE id_mapel='$rt[id_mapel]' and user='$user' and nilai='1'");
			$c=mysqli_fetch_array($hitung);
			$betul=$c['jml'];
		
			
		$gg=mysqli_query($kon, "select * from ujian where id_mapel='$rt[id_mapel]'");
$tp=mysqli_fetch_array($gg);
$spesialnya=$tp['spesial'];
if($spesialnya=='4'){
	$total=$tp['jumlah_soal'];



}else{
			
			$hitung341=mysqli_query($kon, "select count($nama.nilai) as jmltotal from $nama WHERE id_mapel='$rt[id_mapel]' and user='$user'");
			$cde1=mysqli_fetch_array($hitung341);
			$total=$cde1['jmltotal'];
		
		}



			$nilaiakhir=($betul/$total)*100;
			$nilainya=round($nilaiakhir,2);
		$cekraport=mysqli_query($kon, "select * from raport where no_ujian='$user' and pelajaran='$rt[mapel]' ");
$ketemu=mysqli_num_rows($cekraport);
if($ketemu>0){
	mysqli_query($kon, "update raport set nilai='$nilainya' where no_ujian='$user' and pelajaran='$rt[mapel]'")
or die ("SQL Error: ".mysqli_error());
}else{	
		$sql = mysqli_query($kon, "insert into raport (no_ujian,pelajaran,nilai) values 
		('$user','$rt[mapel]','$nilainya')"); 

}		

		}
			
	
}

		
echo "<script>;window.location='raportnya.php'</script>";
?>