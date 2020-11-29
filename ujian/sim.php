<?php
include "system/koneksi.php";

mysqli_set_charset($kon, 'utf8');

$linknya=$_POST['alamat'];
$no=$_GET['no'];
$id=$_GET['id'];
$kls=$_GET['kelas'];
$tanya=$_POST['j1'];
if($linknya=='soalpgessay'){

mysqli_query($kon, "update $linknya set pertanyaan='$tanya' where no_soal='$no' and id_mapel='$id' and kelas='$kls'");

}else if($linknya=='soalmtkessay'){

	mysqli_query($kon, "update $linknya set pertanyaan='$tanya' where no_soal='$no' and id_mapel='$id' and kelas='$kls'");
}else{

	

$ja1=$_POST['ja'];
$jb1=$_POST['jb'];
$jc1=$_POST['jc'];
$jd1=$_POST['jd'];
$je1=$_POST['je'];
$kunci1=$_POST['kunci'];



$ja=strip_tags($ja1,'<img><i><b><tr><td><table>');
$jb=strip_tags($jb1,'<img><i><b><tr><td><table>');
$jc=strip_tags($jc1,'<img><i><b><tr><td><table>');
$jd=strip_tags($jd1,'<img><i><b><tr><td><table>');
$je=strip_tags($je1,'<img><i><b><tr><td><table>');
$kunci=strip_tags($kunci1,'<img><i><b><tr><td><table>');




mysqli_query($kon, "update $linknya set pertanyaan='$tanya', A='$ja', B='$jb', C='$jc', D='$jd', E='$je', kunci='$kunci' where no_soal='$no' and id_mapel='$id' and kelas='$kls'");

}
echo "<script>;window.location='preview.php?mapel=$id&no=$no&alamat=$linknya'</script>";



?>