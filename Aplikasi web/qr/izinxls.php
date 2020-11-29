<?php
include "koneksi.php";

header("Content-type: application/vnd-ms-excel");
 

header("Content-Disposition: attachment; filename=RekapIzinSiswa.xls");
echo " 



Rekap Siswa Izin <br><br>
<table border='1'>
<tr><th>Nama</th><th>NIS</th><th>Kelas</th><th>Tanggal Izin </th><th>Jenis</th><th>Keterangan</th></tr>";
$izin=mysqli_query($kon, "select * from izin");
while($f=mysqli_fetch_array($izin)){
	echo "
	<tr><td>$f[nama]</td><td>$f[nis]</td><td>$f[kelas]</td><td>$f[tanggal]</td><td>$f[izin]</td><td>$f[keterangan]</td></tr>
	
	
	";
	
}

echo "</table>";



?>