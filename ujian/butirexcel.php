<?php
include "system/koneksi.php";
$kode=$_GET['kirim'];
$spesial=substr($kode,0,1);
$mapel=substr($kode,1);
$nama=$mapel.'jawaban';
$pels=mysqli_query($kon, "select * from ujian where id_mapel='$mapel'");
$ret=mysqli_fetch_array($pels);
$pelajaran=$ret['mapel'];

header("Content-type: application/vnd-ms-excel");
 

header("Content-Disposition: attachment; filename=Analisis_ButirSoal_$pelajaran.xls");



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


echo " <div class='judul'> Analisis Butir Soal $pelajaran</div> <br>
<table class='table table-striped table-bordered'>

			<tr><th>No Soal</th><th>Mata Pelajaran</th><th>Jumlah Benar</th><th>Jumlah Salah</th><th>Tidak Jawab</th><th>Indeks</th><th>Kategori</th></tr>
		";
 

if($spesial==1){
 
              $sql97=mysqli_query($kon, "select * from $tabel1 where id_mapel='$mapel'order by no_soal ASC");
		
			while($f=mysqli_fetch_array($sql97)){
			$hitung2=mysqli_query($kon, "select count($nama.nilai) as jml from $nama WHERE id_mapel='$mapel' and nilai='1' and tanya='$f[no_soal]'");
			$c=mysqli_fetch_array($hitung2);
			$hitung3=mysqli_query($kon, "select count($nama.nilai) as jmlsalah from $nama WHERE id_mapel='$mapel' and nilai='0' and tanya='$f[no_soal]'");
			$d=mysqli_fetch_array($hitung3);
			$hitung4=mysqli_query($kon, "select count($nama.nilai) as jmlkosong from $nama WHERE id_mapel='$mapel' and jawab='' and tanya='$f[no_soal]'");
			$e=mysqli_fetch_array($hitung4);
			$penjawab=$c['jml'] + $d['jmlsalah'];
			$persen= @($c['jml'] / $penjawab);
			
			if($persen<=0.3049 and $persen>=0){
				$ket='Tingkat kesulitan sukar';
			}else if($persen<=0.7049 and $persen>=0.3049){
				$ket='Tingkat kesulitan sedang';
			}else if($persen<=1 and $persen>=0.705){
				$ket='Tingkat kesulitan mudah';
			}else{
				$ket='';
			}
			$tampil=round($persen,2);
	echo "
			  <tr><td>$f[no_soal]</td><td>$f[mapel]</td><td>$c[jml]</td><td>$d[jmlsalah]</td><td>$e[jmlkosong]</td><td>$tampil</td><td>$ket</td></tr>";
			
}


 $sql971=mysqli_query($kon, "select * from $tabel2 where id_mapel='$mapel'order by no_soal ASC");
			
			while($f1=mysqli_fetch_array($sql971)){
			$hitung21=mysqli_query($kon, "select count($nama.nilai) as jml1 from $nama WHERE id_mapel='$mapel' and nilai='1' and tanya='$f1[no_soal]'");
			$c1=mysqli_fetch_array($hitung21);
			$hitung31=mysqli_query($kon, "select count($nama.nilai) as jmlsalah1 from $nama WHERE id_mapel='$mapel' and nilai='0' and tanya='$f1[no_soal]'");
			$d1=mysqli_fetch_array($hitung31);
			$hitung41=mysqli_query($kon, "select count($nama.nilai) as jmlkosong1 from $nama WHERE id_mapel='$mapel' and jawab='' and tanya='$f1[no_soal]'");
			$e1=mysqli_fetch_array($hitung41);
			$penjawab1=$c1['jml1'] + $d1['jmlsalah1'];
			$persen1= @($c1['jml1'] / $penjawab1);
			
			if($persen1<=0.3049 and $persen1>=0){
				$ket1='Tingkat kesulitan sukar';
			}else if($persen1<=0.7049 and $persen1>=0.3049){
				$ket1='Tingkat kesulitan sedang';
			}else if($persen1<=1 and $persen1>=0.705){
				$ket1='Tingkat kesulitan mudah';
			}else{
				$ket1='';
			}
			$tampil1=round($persen1,2);
	echo "
			  <tr><td>$f1[no_soal]</td><td>$f1[mapel]</td><td>$c1[jml1]</td><td>$d1[jmlsalah1]</td><td>$e1[jmlkosong1]</td><td>$tampil1</td><td>$ket1</td></tr>";
			
}

}else if($spesial==4){
 
              $sql97=mysqli_query($kon, "select * from $tabel1 where id_mapel='$mapel' order by no_soal ASC");
		
			while($f=mysqli_fetch_array($sql97)){
			$hitung2=mysqli_query($kon, "select count($nama.nilai) as jml from $nama WHERE id_mapel='$mapel' and nilai='1' and tanya='$f[no_soal]'");
			$c=mysqli_fetch_array($hitung2);
			$hitung3=mysqli_query($kon, "select count($nama.nilai) as jmlsalah from $nama WHERE id_mapel='$mapel' and nilai='0' and tanya='$f[no_soal]'");
			$d=mysqli_fetch_array($hitung3);
			$hitung4=mysqli_query($kon, "select count($nama.nilai) as jmlkosong from $nama WHERE id_mapel='$mapel' and jawab='' and tanya='$f[no_soal]'");
			$e=mysqli_fetch_array($hitung4);
			$penjawab=$c['jml'] + $d['jmlsalah'];
			$persen= @($c['jml'] / $penjawab);
			
			if($persen<=0.3049 and $persen>=0){
				$ket='Tingkat kesulitan sukar';
			}else if($persen<=0.7099 and $persen>=0.3){
				$ket='Tingkat kesulitan sedang';
			}else if($persen<=1 and $persen>=0.71){
				$ket='Tingkat kesulitan mudah';
			}else{
				$ket='';
			}
	echo "
			  <tr><td>$f[no_soal]</td><td>$f[mapel]</td><td>$c[jml]</td><td>$d[jmlsalah]</td><td>$e[jmlkosong]</td><td>$persen </td><td>$ket</td></tr>";
			
}


			



}else if($spesial==2){
 
              $sql97=mysqli_query($kon, "select * from $tabel2 where id_mapel='$mapel'order by no_soal ASC");
		
			while($f=mysqli_fetch_array($sql97)){
			$hitung2=mysqli_query($kon, "select count($nama.nilai) as jml from $nama WHERE id_mapel='$mapel' and nilai='1' and tanya='$f[no_soal]'");
			$c=mysqli_fetch_array($hitung2);
			$hitung3=mysqli_query($kon, "select count($nama.nilai) as jmlsalah from $nama WHERE id_mapel='$mapel' and nilai='0' and tanya='$f[no_soal]'");
			$d=mysqli_fetch_array($hitung3);
			$hitung4=mysqli_query($kon, "select count($nama.nilai) as jmlkosong from $nama WHERE id_mapel='$mapel' and jawab='' and tanya='$f[no_soal]'");
			$e=mysqli_fetch_array($hitung4);
			$penjawab=$c['jml'] + $d['jmlsalah'];
			$persen= @($c['jml'] / $penjawab);
			
			if($persen<=0.3049 and $persen>=0){
				$ket='Tingkat kesulitan sukar';
			}else if($persen<=0.7049 and $persen>=0.3049){
				$ket='Tingkat kesulitan sedang';
			}else if($persen<=1 and $persen>=0.705){
				$ket='Tingkat kesulitan mudah';
			}else{
				$ket='';
			}
			$tampil=round($persen,2);
	echo "
			  <tr><td>$f[no_soal]</td><td>$f[mapel]</td><td>$c[jml]</td><td>$d[jmlsalah]</td><td>$e[jmlkosong]</td><td>$tampil</td><td>$ket</td></tr>";
			
}


 $sql971=mysqli_query($kon, "select * from $tabel1 where id_mapel='$mapel'order by no_soal ASC");
			
			while($f1=mysqli_fetch_array($sql971)){
			$hitung21=mysqli_query($kon, "select count($nama.nilai) as jml1 from $nama WHERE id_mapel='$mapel' and nilai='1' and tanya='$f1[no_soal]'");
			$c1=mysqli_fetch_array($hitung21);
			$hitung31=mysqli_query($kon, "select count($nama.nilai) as jmlsalah1 from $nama WHERE id_mapel='$mapel' and nilai='0' and tanya='$f1[no_soal]'");
			$d1=mysqli_fetch_array($hitung31);
			$hitung41=mysqli_query($kon, "select count($nama.nilai) as jmlkosong1 from $nama WHERE id_mapel='$mapel' and jawab='' and tanya='$f1[no_soal]'");
			$e1=mysqli_fetch_array($hitung41);
			$penjawab1=$c1['jml1'] + $d1['jmlsalah1'];
			$persen1= @($c1['jml1'] / $penjawab1);
			
			if($persen1<=0.3049 and $persen1>=0){
				$ket1='Tingkat kesulitan sukar';
			}else if($persen1<=0.7049 and $persen1>=0.3049){
				$ket1='Tingkat kesulitan sedang';
			}else if($persen1<=1 and $persen1>=0.705){
				$ket1='Tingkat kesulitan mudah';
			}else{
				$ket1='';
			}
			$tampil1=round($persen1,2);
	echo "
			  <tr><td>$f1[no_soal]</td><td>$f1[mapel]</td><td>$c1[jml1]</td><td>$d1[jmlsalah1]</td><td>$e1[jmlkosong1]</td><td>$tampil1</td><td>$ket1</td></tr>";
			
}


}else {
 
              $sql97=mysqli_query($kon, "select * from $tabel1 where id_mapel='$mapel'order by no_soal ASC");
		
			while($f=mysqli_fetch_array($sql97)){
			$hitung2=mysqli_query($kon, "select count($nama.nilai) as jml from $nama WHERE id_mapel='$mapel' and nilai='1' and tanya='$f[no_soal]'");
			$c=mysqli_fetch_array($hitung2);
			$hitung3=mysqli_query($kon, "select count($nama.nilai) as jmlsalah from $nama WHERE id_mapel='$mapel' and nilai='0' and tanya='$f[no_soal]'");
			$d=mysqli_fetch_array($hitung3);
			$hitung4=mysqli_query($kon, "select count($nama.nilai) as jmlkosong from $nama WHERE id_mapel='$mapel' and jawab='' and tanya='$f[no_soal]'");
			$e=mysqli_fetch_array($hitung4);
			$penjawab=$c['jml'] + $d['jmlsalah'];
			$persen= @($c['jml'] / $penjawab);
			
			if($persen<=0.3049 and $persen>=0){
				$ket='Tingkat kesulitan sukar';
			}else if($persen<=0.7049 and $persen>=0.3049){
				$ket='Tingkat kesulitan sedang';
			}else if($persen<=1 and $persen>=0.705){
				$ket='Tingkat kesulitan mudah';
			}else{
				$ket='';
			}
			$tampil=round($persen,2);
	echo "
			  <tr><td>$f[no_soal]</td><td>$f[mapel]</td><td>$c[jml]</td><td>$d[jmlsalah]</td><td>$e[jmlkosong]</td><td>$tampil</td><td>$ket</td></tr>";
			
}




}





echo "
			
            </table>
			

";
			
		
		

?>