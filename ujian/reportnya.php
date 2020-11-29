<?php
include "system/koneksi.php";
$mapel=$_POST['kirim'];
$nama=$mapel.'jawaban';

echo "
<style>
.paske1{
	margin-top:-10px;
	margin-right:30px;
}
</style>

<a onclick=\"window.open('assets/code/mkks.php'); \" href='pdf/ujian.php?mapel=$mapel'><button type='button' class='btn btn-danger btn-sm float-right paske1'>
                          <i class='fa fa-list-alt'></i> &nbsp;  Export to PDF
                        </button></a>
<br><br>
<table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>

		<tr><th>No.</th><th>Nama</th><th>Kelas</th><th>Jurusan</th><th>No Ujian</th><th>Mapel</th><th>Jml Benar</th><th>Jml Salah</th><th>Tdk Jwb</th><th>Nilai</th></tr>
				</thead> 
				<tbody>";
               			
         $sqlhasil=mysqli_query($kon, "select * from selesai where id_mapel='$mapel' order by id_mapel, no_ujian");
	$no=1;
				while($h=mysqli_fetch_array($sqlhasil)){
 echo "
			<tr><td>$no</td><td>";
			$peserta=mysqli_query($kon, "select * from peserta where no_ujian='$h[no_ujian]'");
			$n=mysqli_fetch_array($peserta);
			 echo " $n[nama]
			</td><td>$n[kelas]</td><td>$n[jurusan]</td><td>$n[no_ujian]</td>";
			$mapel=mysqli_query($kon, "select*from ujian where id_mapel='$h[id_mapel]'");
			$s=mysqli_fetch_array($mapel);
			echo "
			<td> $s[mapel]</td> "; 
			$hitung=mysqli_query($kon, "select count($nama.nilai) as jml from $nama WHERE id_mapel='$h[id_mapel]' and user='$h[no_ujian]' and nilai='1'");
			$c=mysqli_fetch_array($hitung);
			$betul=$c['jml'];
			$hitung34=mysqli_query($kon, "select count($nama.nilai) as jmlsalah from $nama WHERE id_mapel='$h[id_mapel]' and user='$h[no_ujian]' and nilai='0'");
			$cde=mysqli_fetch_array($hitung34);
			


		$gg=mysqli_query($kon, "select * from ujian where id_mapel='$h[id_mapel]'");
$tp=mysqli_fetch_array($gg);
$spesialnya=$tp['spesial'];
if($spesialnya=='4'){
	$total=$tp['jumlah_soal'];

$kesalahan=mysqli_query($kon, "select * from soalpgessay where id_mapel='$h[id_mapel]'");
$mm=mysqli_fetch_array($kesalahan);
	$salah=$cde['jmlsalah']-$mm['jumlah_soal'];

}else{
			
			$hitung341=mysqli_query($kon, "select count($nama.nilai) as jmltotal from $nama WHERE id_mapel='$h[id_mapel]' and user='$h[no_ujian]'");
			$cde1=mysqli_fetch_array($hitung341);
			$total=$cde1['jmltotal'];
			$salah=$cde['jmlsalah'];
		}
			$nilaiakhir=($betul/$total)*100;
		
			echo "
			<td>$betul</td><td>$salah</td><td>";
			
			$hitung2=mysqli_query($kon, "select count($nama.jawab) as jml2 from $nama WHERE id_mapel='$h[id_mapel]' and user='$h[no_ujian]' and jawab=''");
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