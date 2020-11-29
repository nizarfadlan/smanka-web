<?php
include "../system/koneksi.php";

$sql98=mysqli_query($kon, "select * from admin");
$e=mysqli_fetch_array($sql98);



	
$sql97=mysqli_query($kon, "select * from peserta");
while($f=mysqli_fetch_array($sql97)){


	$strhtml .= "

<div class='card'>
<div class='header'>
<img src='../asset/$e[foto]' width='45px' style='float:left' />

<div class='judul'>Kartu Peserta Test </div>
<div class='judul1'>$e[nama_sekolah] </div>

</div>

							<div class='label1'><label class='nama'>Nama Peserta</label></div>
							
                            <div class='label2'><label class='isi'>: $f[nama]</label></div>
							<div class='label1'><label class='nama'>Nis</label></div>
					
                            <div class='label2'><label class='isi'>: $f[nis]</label></div>
							<div class='label1'><label class='nama'>Kelas</label></div>
						
                            <div class='label2'><label class='isi'>: $f[kelas]</label></div>
							
							<div class='label1'><label class='nama'>Jurusan</label></div>
							
                            <div class='label2'><label class='isi'>: $f[jurusan]</label></div>
							<div class='label1'><label class='nama'>Mapel Pilihan</label></div>
							
                            <div class='label2'><label class='isi'>: $f[mapel_pil]</label></div>
					
							<div class='label1'><label class='nama'>User Name</label></div>
							 <div class='label2'><label class='isi'>: $f[no_ujian]</label></div>
							
                           
							<div class='label1'><label class='nama'>Password</label></div>
					
                            <div class='label2'><label class='isi'>: $f[password]</label></div>
<br>
<div class='fotter'>
	<div class='foto'>";
	if(empty($f['foto'])){
	$strhtml .= "
	<img src='../asset/avatar.gif' width='75px'> 	";
	}else{
		$strhtml .= "
		<img src='../foto/thumbs/$f[foto]' width='75px'> ";
	}
	
	$strhtml .= "
	
	
	</div>
	
<div class='kanan'>
	Kepala Sekolah <br><br><br><br>
	<div class='kepsek'><u>$e[kepala_sekolah]</u></div>
	<div class='kepsek'> $e[nip]</div>
	
</div>

</div>

</div>

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