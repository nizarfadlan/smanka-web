<?php
include "system/koneksi.php";
$minimal=mysqli_query($kon, "select MIN(sisa_waktu) as waktusisa from jawaban where user='104' and id_mapel='BHSINDO12' and sisa_waktu<>0");
$a=mysqli_fetch_array($minimal);
$detik=$a['waktusisa'];
echo "$detik ";
?>