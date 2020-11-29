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
.paske1{
	margin-top:-50px;
	margin-right:30px;
}
.paske{
	margin-top:-50px;
	margin-right:160px;
}
</style>
 <a href='butirexcel.php?kirim=$_POST[kirim]'>
					  <button type='button' class='btn btn-primary btn-sm float-right paske' id='sembunyi'>
                          <i class='fa fa-print'></i> Cetak Excel
                        </button>
					  </a>
 <a href='pdf/butir.php?kirim=$_POST[kirim]'>
					  <button type='button' class='btn btn-danger btn-sm float-right paske1' id='sembunyi'>
                          <i class='fa fa-print'></i> Cetak PDF
                        </button>
					  </a>					  
					  
					  
					  
					  <br>
  </div>

<table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>

			<tr><th>No.</th><th>Nama</th><th>Kelas</th><th>No Ujian</th><th>Mapel</th><th>Jml Benar</th><th>Jml Salah</th><th>Tdk Jwb</th><th>Nilai</th></tr>
				</thead> 
				<tbody>";
 
$sqlhasil=mysqli_query($kon, "select * from selesai where id_mapel='$mapel'");
	$no=1;
				while($h=mysqli_fetch_array($sqlhasil)){
 echo "
			<tr><td>$no</td><td>";
			$peserta=mysqli_query($kon, "select * from peserta where no_ujian='$h[no_ujian]'");
			$n=mysqli_fetch_array($peserta);
			 echo " $n[nama]
			</td><td>$n[kelas]</td><td>$n[no_ujian]</td>";
			$mapel=mysqli_query($kon, "select*from ujian where id_mapel='$h[id_mapel]'");
			$s=mysqli_fetch_array($mapel);
			echo "
			<td> $s[mapel]</td> "; 
			$hitung=mysqli_query($kon, "select count(jawaban.nilai) as jml from jawaban WHERE id_mapel='$h[id_mapel]' and user='$h[no_ujian]' and nilai='1'");
			$c=mysqli_fetch_array($hitung);
			$betul=$c['jml'];
			$hitung34=mysqli_query($kon, "select count(jawaban.nilai) as jmlsalah from jawaban WHERE id_mapel='$h[id_mapel]' and user='$h[no_ujian]' and nilai='0'");
			$cde=mysqli_fetch_array($hitung34);
			
			$hitung341=mysqli_query($kon, "select count(jawaban.nilai) as jmltotal from jawaban WHERE id_mapel='$h[id_mapel]' and user='$h[no_ujian]'");
			$cde1=mysqli_fetch_array($hitung341);
			$total=$cde1['jmltotal'];
			$salah=$cde['jmlsalah'];
			$nilaiakhir=($betul/$total)*100;
		
			echo "
			<td>$betul</td><td>$salah</td><td>";
			
			$hitung2=mysqli_query($kon, "select count(jawaban.jawab) as jml2 from jawaban WHERE id_mapel='$h[id_mapel]' and user='$h[no_ujian]' and jawab=''");
			$d=mysqli_fetch_array($hitung2);
			
			echo "$d[jml2]
			</td><td>".round($nilaiakhir,2)."</td></tr>
			";
			$no++;
		
			}
 echo "
			 </tbody>   
            </table>
			
			
		
		
		   <script src='assets/js/lib/data-table/datatables.min.js'></script> 
		   <script src='assets/js/lib/data-table/dataTables.bootstrap.min.js'></script> 
		    <script src='assets/js/lib/data-table/datatables-init.js'></script> 
			
			";
			

?>