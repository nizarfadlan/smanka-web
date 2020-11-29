<?php
$mapel=$_GET['mapel'];
$urutan=$_GET['no'];
$jumlah=$_GET['jml'];
$spesial=$_GET['spesial'];
$ba=$_GET['batas'];

$soal=$_GET['nomer'];




echo "<script>;window.location='preview1.php?kirim=$mapel&nomer=$soal&jml=$jumlah&sp=$spesial&batas=$ba'</script>";




?>