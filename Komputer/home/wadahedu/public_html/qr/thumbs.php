<?php
$file = $_FILES['file4']['name'];

if(!empty($file)){

function Upload($uploadName){
  
$uploadedfile = $_FILES['file4']['tmp_name'];
$tipe_file = $_FILES['file4']['type'];


switch($tipe_file){
case 'image/jpg':
case 'image/jpeg':
$src = imagecreatefromjpeg($uploadedfile);
break;
case 'image/gif':
$src = imagecreatefromgif($uploadedfile);
break;
case 'image/png':
$src = imagecreatefrompng($uploadedfile);
break;
default:
$src = false;
break;
}
list($width,$height)=getimagesize($uploadedfile);

$newwidth=60;
$newheight=($height/$width)*$newwidth;
$tmp=imagecreatetruecolor($newwidth,$newheight);


imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);


$filename = "asset/". $_FILES['file4']['name'];
imagejpeg($tmp,$filename,100);

imagedestroy($src);
imagedestroy($tmp); 
	
	
    }
	$file4         = $_FILES['file4']['tmp_name'];
$file4Name     = $_FILES['file4']['name'];
$file4Type     = $_FILES['file4']['type'];
$file4Size     = $_FILES['file4']['size'];

Upload($file4Name);
}else{
}


?> 
