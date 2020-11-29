<?php


include "koneksi.php";
include "tanggalbaru.php";
$bulanku=$_GET['tgl1'];
$muncul=bulansaja($bulanku);
echo "
<h2 class='text-center'> Rekap Presensi Bulan $muncul	</h2>		
	
	 <table class='table table-bordered'>
	 <tr><th>Nama</th>";
$tglawal1=$_GET['tgl1'];
$tglakhir1=$_GET['tgl2'];

$tgl = substr($tglawal1, 8, 2);

 for ($i=$tglawal1 ; $i<=$tglakhir1 ; $i++ ){
	$hari=hari ($tglawal1);
	echo "
	<th align='center'>$tgl <br> $hari </th>";
	$tglawal1++;
	$tgl++;
}

echo "</tr>

<tr>";
$nama=mysql_query("select * from anggota ");
while($e=mysql_fetch_array($nama)){
$id3=$e['id_anggota'];
echo "
<td>$e[nama]</td> ";
			$tglawal2=$_GET['tgl1'];
			$tglakhir2=$_GET['tgl2'];
			$id4=$e['id_anggota'];
			for ($g=$tglawal2 ; $g<=$tglakhir2 ; $g++ ){
				$ambilhari=mysql_query("select * from temp where id_anggota='$id4' and status='0' and tanggal='$tglawal2' ");
				$k=mysql_fetch_array($ambilhari);
				$datang=$k['jam'];
				
	
				$ambilhari1=mysql_query("select * from temp where id_anggota='$id4' and status='1' and tanggal='$tglawal2'");
				$l=mysql_fetch_array($ambilhari1);
				$pulang=$l['jam'];
				if($datang<>0){
					$berangkat=$datang;
				}else{
					$berangkat='TAM';
				}
				if($pulang<>0){
					$balik=$pulang;
				}else{
					$balik='TAP';
				}
	if($berangkat=='TAM' and $balik=='TAP'){
		echo "<td align='center'>A</td>";
	}else{
				echo "
					<td align='center'>$berangkat<br>$balik</td>";
	}
				$tglawal2++;
		

				}
echo " </td></tr>";
}
echo "

</table>
 		
	";
echo "<script>;window.location='excel.php'</script>";
?>