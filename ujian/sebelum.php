<?php


$kirim=$_GET['kirim'];
$sp=$_GET['sp'];
$jml=$_GET['jml'];

$batas=$_GET['batas'];

if($sp=='1'){

echo "<script>;window.location='preview1.php?kirim=$kirim&sp=$sp&nomer=1&jml=$jml&batas=$batas'</script>";
}else if($sp=='2'){
echo "<script>;window.location='previewinggris.php?kirim=$kirim&sp=$sp&nomer=1&jml=$jml&batas=$batas'</script>";
}else if($sp=='4'){
echo "<script>;window.location='previewpas.php?kirim=$kirim&sp=$sp&nomer=1&jml=$jml&batas=$batas'</script>";
}else{
echo "<script>;window.location='previewsoal.php?kirim=$kirim&sp=$sp&nomer=1&jml=$jml&batas=$batas'</script>";
}




echo "<script>;window.location='preview1.php?kirim=$mapel&nomer=$soal&jml=$jumlah&sp=$spesial&batas=$ba'</script>";




?>