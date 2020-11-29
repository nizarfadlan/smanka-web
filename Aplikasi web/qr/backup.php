elseif($_GET['state']=='izin'){
	include "tanggalbaru.php";
	echo"
						
<link href='css/datepicker.css' rel='stylesheet'>
    <script type='text/javascript' src='js/jquery-1.10.2.min.js'></script> 	
	<div class='card'>
                    <div class='card-header'>
        	<i class='mr-2 fa fa-align-justify'></i>
                        <strong class='card-title'>Rekap Presensi</strong>
                    </div>
                    <div class='card-body'>
                     					
					<div class='card-body card-block'>
			<form action='' method='post'>
			<input name='laporan1' hidden>
			<div class='col col-md-2'><label for='text-input' class=' form-control-label'>Dari Tanggal</label></div>
				<div class='col-sm-3'>	
				
	            <div class='input-group date ' data-date='' data-date-format='yyyy-mm-dd'>
	                <input class='form-control' type='text' name='tgl1' readonly required value=''> 
	                <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
            </div></div>
			<div class='col col-md-2'><label for='text-input' class=' form-control-label'>Sampai Tanggal</label></div>
			<div class='col-sm-3'>					
	            <div class='input-group date ' data-date='' data-date-format='yyyy-mm-dd'>
	                <input class='form-control' type='text' name='tgl2' readonly required value=''> 
	                <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
            </div></div>

                   <button type='submit' class='btn btn-primary btn-sm'><i class='fa fa-calendar'></i> Pilih
                        </button>
					</form>	
</div></div>					
	 <div class='card'>
	 <table class='table table-striped'>
	 <tr><th>Nama</th>";
$tglawal1=$_POST['tgl1'];
$tglakhir1=$_POST['tgl2'];
$tglawal2=$_POST['tgl1'];
$tglakhir2=$_POST['tgl2'];
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

for ($g=$tglawal2 ; $g<=$tglakhir2 ; $g++ ){
	$ambilhari=mysql_query("select * from anggota INNER JOIN temp ON temp.id_anggota=anggota.id_anggota where temp.id_anggota='$id3' and status='0' and date(tanggal_jam)='$tglawal2' ");
	$k=mysql_fetch_array($ambilhari);
	$datang1=$k[tanggal_jam];
	$jamdatang = substr($datang1, 11, 8);
	
	$ambilhari1=mysql_query("select * from anggota INNER JOIN temp ON temp.id_anggota=anggota.id_anggota where temp.id_anggota='$id3' and status='1' and date(tanggal_jam)='$tglawal2'");
	$l=mysql_fetch_array($ambilhari1);
	$pulang1=$l[tanggal_jam];
	$jampulang = substr($pulang1, 11, 8);
	
	echo "
	<td align='center'>$tglawal2<br>$jamdatang<br>$jampulang</td>";
$tglawal2++;

}
echo " </td></tr>";
}
echo "

</table>
	
	</div>
	
	
	<script src='js/bootstrap-datepicker.js'></script>
    <script>
    $('.input-group.date').datepicker({autoclose: true, todayHighlight: true});
    </script>	";
	
	
	
 }