<?php
include "system/koneksi.php";
$kode=$_POST['kirim'];
$spesial=substr($kode,0,1);
$mapel=substr($kode,1);

if($spesial==1){
	$tabel1='soalmtk'; 
	$tabel2='soalmtkessay';
}else if($spesial==2){
	$tabel1='soalinggris'; 
	$tabel2='soallistening';
}else {
	$tabel1='soal';
}


echo "
<style>
.paske{
	margin-top:-50px;
	margin-right:30px;
}
</style>

  </div>

<table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>

			<tr><th>Nama</th><th>Mapel</th><th>Jumlah Benar</th><th>Jumlah Salah</th><th>Tidak Jawab</th><th>Nilai</th><th>Cetak</th></tr>
				</thead> 
				<tbody>";
 

if($spesial==1){
	$sql97=mysqli_query($kon, "select * from $tabel1 where id_mapel='$mapel'");
		
		$f=mysqli_fetch_array($sql97);
		
	
	
	$selesai=mysqli_query($kon, "select * from selesai inner join peserta on selesai.no_ujian=peserta.no_ujian where selesai.id_mapel='$mapel'");
	while($kp=mysqli_fetch_array($selesai)){
		
 $hitung2=mysqli_query($kon, "select count(jawaban.nilai) as jml from jawaban WHERE id_mapel='$mapel' and nilai='1' and user='$kp[no_ujian]'");
			$c=mysqli_fetch_array($hitung2);
			$hitung3=mysqli_query($kon, "select count(jawaban.nilai) as jmlsalah from jawaban WHERE id_mapel='$mapel' and nilai='0' and user='$kp[no_ujian]'");
			$d=mysqli_fetch_array($hitung3);
			$hitung4=mysqli_query($kon, "select count(jawaban.nilai) as jmlkosong from jawaban WHERE id_mapel='$mapel' and jawab='' and user='$kp[no_ujian]'");
			$e=mysqli_fetch_array($hitung4);
             $total=$c['jml'] + $d['jmlsalah'];
			 $betul=$c['jml'];
			 $nilai= ($betul/$total) * 100;
		
			
	echo "
			  <tr><td>$kp[nama]</td><td>$f[mapel]</td><td>$c[jml]</td><td>$d[jmlsalah]</td><td>$e[jmlkosong]</td><td>".round($nilai,2)."</td>
			  <td><a href='raport1.php?user=$kp[no_ujian]&mapel=$mapel&kode=1'>
					  <button type='button' class='btn btn-danger btn-sm'>
                          <i class='fa fa-print'></i> Cetak
                        </button>
					  </a></td></tr>";
			
}


}else if($spesial==2){
 
              $sql97=mysqli_query($kon, "select * from $tabel2 where id_mapel='$mapel'");
		
			while($f=mysqli_fetch_array($sql97)){
			$hitung2=mysqli_query($kon, "select count(jawaban.nilai) as jml from jawaban WHERE id_mapel='$mapel' and nilai='1' and tanya='$f[no_soal]'");
			$c=mysqli_fetch_array($hitung2);
			$hitung3=mysqli_query($kon, "select count(jawaban.nilai) as jmlsalah from jawaban WHERE id_mapel='$mapel' and nilai='0' and tanya='$f[no_soal]'");
			$d=mysqli_fetch_array($hitung3);
			$hitung4=mysqli_query($kon, "select count(jawaban.nilai) as jmlkosong from jawaban WHERE id_mapel='$mapel' and jawab='' and tanya='$f[no_soal]'");
			$e=mysqli_fetch_array($hitung4);
			$penjawab=$c['jml'] + $d['jmlsalah'];
			$persen= @($c['jml'] / $penjawab);
			
			if($persen<=0.3 and $persen>=0){
				$ket='Tingkat kesulitan sukar';
			}else if($persen<=0.7 and $persen>=0.31){
				$ket='Tingkat kesulitan sedang';
			}else if($persen<=1 and $persen>=0.71){
				$ket='Tingkat kesulitan mudah';
			}else{
				$ket='';
			}
	echo "
			  <tr><td>$f[no_soal]</td><td>$f[mapel]</td><td>$c[jml]</td><td>$d[jmlsalah]</td><td>$e[jmlkosong]</td><td>$persen </td><td>$ket</td></tr>";
			
}


 $sql971=mysqli_query($kon, "select * from $tabel1 where id_mapel='$mapel'");
			
			while($f1=mysqli_fetch_array($sql971)){
			$hitung21=mysqli_query($kon, "select count(jawaban.nilai) as jml1 from jawaban WHERE id_mapel='$mapel' and nilai='1' and tanya='$f1[no_soal]'");
			$c1=mysqli_fetch_array($hitung21);
			$hitung31=mysqli_query($kon, "select count(jawaban.nilai) as jmlsalah1 from jawaban WHERE id_mapel='$mapel' and nilai='0' and tanya='$f1[no_soal]'");
			$d1=mysqli_fetch_array($hitung31);
			$hitung41=mysqli_query($kon, "select count(jawaban.nilai) as jmlkosong1 from jawaban WHERE id_mapel='$mapel' and jawab='' and tanya='$f1[no_soal]'");
			$e1=mysqli_fetch_array($hitung41);
			$penjawab1=$c1['jml1'] + $d1['jmlsalah1'];
			$persen1= @($c1['jml1'] / $penjawab1);
			
			if($persen1<=0.3 and $persen1>=0){
				$ket1='Tingkat kesulitan sukar';
			}else if($persen1<=0.7 and $persen1>=0.31){
				$ket1='Tingkat kesulitan sedang';
			}else if($persen1<=1 and $persen1>=0.71){
				$ket1='Tingkat kesulitan mudah';
			}else{
				$ket1='';
			}
	echo "
			  <tr><td>$f1[no_soal]</td><td>$f1[mapel]</td><td>$c1[jml1]</td><td>$d1[jmlsalah1]</td><td>$e1[jmlkosong1]</td><td>$persen1 </td><td>$ket1</td></tr>";
			
}


}else {
 
              $sql97=mysqli_query($kon, "select * from $tabel1 where id_mapel='$mapel'");
		
			while($f=mysqli_fetch_array($sql97)){
			$hitung2=mysqli_query($kon, "select count(jawaban.nilai) as jml from jawaban WHERE id_mapel='$mapel' and nilai='1' and tanya='$f[no_soal]'");
			$c=mysqli_fetch_array($hitung2);
			$hitung3=mysqli_query($kon, "select count(jawaban.nilai) as jmlsalah from jawaban WHERE id_mapel='$mapel' and nilai='0' and tanya='$f[no_soal]'");
			$d=mysqli_fetch_array($hitung3);
			$hitung4=mysqli_query($kon, "select count(jawaban.nilai) as jmlkosong from jawaban WHERE id_mapel='$mapel' and jawab='' and tanya='$f[no_soal]'");
			$e=mysqli_fetch_array($hitung4);
			$penjawab=$c['jml'] + $d['jmlsalah'];
			$persen= @($c['jml'] / $penjawab);
			
			if($persen<=0.3 and $persen>=0){
				$ket='Tingkat kesulitan sukar';
			}else if($persen<=0.7 and $persen>=0.31){
				$ket='Tingkat kesulitan sedang';
			}else if($persen<=1 and $persen>=0.71){
				$ket='Tingkat kesulitan mudah';
			}else{
				$ket='';
			}
	echo "
			  <tr><td>$f[no_soal]</td><td>$f[mapel]</td><td>$c[jml]</td><td>$d[jmlsalah]</td><td>$e[jmlkosong]</td><td>$persen </td><td>$ket</td></tr>";
			
}




}





echo "
			 </tbody>   
            </table>
			
			
		
		
		   <script src='assets/js/lib/data-table/datatables.min.js'></script> 
		   <script src='assets/js/lib/data-table/dataTables.bootstrap.min.js'></script> 
		    <script src='assets/js/lib/data-table/datatables-init.js'></script> 
			
			";
			

?>