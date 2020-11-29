<?php
include "system/koneksi.php";


  
$sql=mysqli_query($kon, "select * from admin");
		$ek=mysqli_fetch_array($sql);	
echo"

 <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CPanel</title>
    <meta name='description' content='Eko Timo'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel='apple-touch-icon' href='apple-icon.png'>
    <link rel='shortcut icon' href='favicon.ico'>

    <link rel='stylesheet' href='css/normalize.css'>
    <link rel='stylesheet' href='css/bootstrap.css'>
    <link rel='stylesheet' href='css/font-awesome.min.css'>
    <link rel='stylesheet' href='css/style.css'> ";
echo "
<script>
var wedalnya;
wedalnya = 900;
var wedal;
var mlaku = 0;
var entek = 0; 

function init(){
    checkCookie()
    mulai();
}
function keluar(){
    if(entek==0){
        setCookie('wedalx',wedal,365);
		
    }else{
        setCookie('wedalx',0,-1);
		
    }
	clearTimeout(t);
        
        entek = 1;
	
}
function mulai(){
    jam = Math.floor(wedal/3600);
    sisa = wedal%3600;
    menit = Math.floor(sisa/60);
    sisa2 = sisa%60
    detik = sisa2%60;
    if(detik<10){
        detikx = '0'+detik;
    }else{
        detikx = detik;
    }
    if(menit<10){
        menitx = '0'+menit;
    }else{
        menitx = menit;
    }
    if(jam<10){
        jamx = '0'+jam;
    }else{
        jamx = jam;
    }
    document.getElementById('divwedal').innerHTML = jamx+' : '+menitx+' : '+detikx +'';


	
	
    wedal --;
    if(wedal>0){
        t = setTimeout('mulai()',1000);
        mlaku = 1;
    }else{
        if(mlaku==1){
            clearTimeout(t);
        }
        entek = 1;
      document.getElementById('cek_token').submit();
	
    }
}
function rampung(){    
    if(mlaku==1){
            clearTimeout(t);
        }
        entek = 1;
		
    document.getElementById('form_cek').submit();
	
}
function getCookie(c_name){
    if (document.cookie.length>0){
        c_start=document.cookie.indexOf(c_name + '=');
        if (c_start!=-1){
            c_start=c_start + c_name.length+1;
            c_end=document.cookie.indexOf(';',c_start);
            if (c_end==-1) c_end=document.cookie.length;
            return unescape(document.cookie.substring(c_start,c_end));
        }
    }
    return '';
}

function setCookie(c_name,value,expiredays){
    var exdate=new Date();
    exdate.setDate(exdate.getDate()+expiredays);
    document.cookie=c_name+ '=' +escape(value)+((expiredays==null) ? '' : ';expires='+exdate.toGMTString());
}

function checkCookie(){
    wedaly=getCookie('wedalx');
    if (wedaly!=null && wedaly!=''){
        wedal = wedaly;
    }else{
        wedal = wedalnya;
        setCookie('wedalx',wedalnya,7);
    }
}

</script>



<script type='text/javascript'>
function tombol()
{
document.getElementById('tombol').innerHTML= '<input type=button value=Simpan onclick=selesai()>;
}
</script>

<body onload=init() onunload=keluar()>
<p>
";
error_reporting(0);

session_start();

if (empty($_SESSION[user]) AND empty($_SESSION[password])){
  echo "
						
						
						
						    <div class='col-sm-12'>
                <div class='alert  alert-danger alert-dismissible fade show' role='alert'>
                  <span class='badge badge-pill badge-danger'>Gagal</span> Anda Tidak Bisa Akses Halaman Ini Tanpa Login!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div>
			<div class='col-sm-12'>
			<div class='card-footer'><a href='cpanel/index.php'>
                        <button type='button' class='btn btn-primary btn-block'>
                          <i class='fa fa-dot-circle-o'></i> Login
                        </button></a>
						

						";
}
else{

echo "
        <!-- Left Panel -->

    <aside id='left-panel' class='left-panel'>
        <nav class='navbar navbar-expand-sm navbar-default'>

            <div class='navbar-header'>
                <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#main-menu' aria-controls='main-menu' aria-expanded='false' aria-label='Toggle navigation'>
                    <i class='fa fa-bars'></i>
                </button>
                <a class='navbar-brand' href='./'><img src='asset/$ek[foto]' alt='Logo' width='70px'></a>
                <a class='navbar-brand hidden' href='./'><img src='asset/logo2.png' alt='Logo'></a>
            </div> 

            <div id='main-menu' class='main-menu collapse navbar-collapse'>
                <ul class='nav navbar-nav'>
                    <li class='active'>
                        <a href='?bagian=home'> <i class='menu-icon fa fa-dashboard'></i>Dashboard </a>
                    </li>
					<li class='active'>
                        <a href='?bagian=token'> <i class='menu-icon fa fa-dashboard'></i> <div class='token'>Token </div><div id=divwedal ></div></a>
                    </li>
					
                    <h3 class='menu-title'>Managemen Sekolah</h3><!-- /.menu-title -->
                     <li>
                        <a href='?bagian=sekolah'><i class='menu-icon fa fa-home'></i>Ubah Data Sekolah </a>
                    </li>
					<li>
                        <a href='?bagian=kop'><i class='menu-icon fa fa-envelope'></i>Edit KOP Surat </a>
                    </li>
					<li>
                        <a href='?bagian=test'><i class='menu-icon fa fa-credit-card'></i>Jenis Test </a>
                    </li>
					 <li>
                        <a href='?bagian=siswa'> <i class='menu-icon fa fa-users'></i>Upload Data Siswa </a>
                    </li>
					<li>
                        <a href='?bagian=foto'> <i class='menu-icon fa fa-picture-o'></i>Upload Foto </a>
                    </li>
					 <li>
                        <a href='?bagian=cetak'> <i class='menu-icon fa fa-credit-card'></i>Cetak Kartu Peserta</a>
                    </li>
					
					
					
					<h3 class='menu-title'>Managemen Soal</h3>
                     <li>
                        <a href='?bagian=soal'> <i class='menu-icon fa fa-book'></i>Upload Soal </a>
                    </li>
					<li>
                        <a href='?bagian=gambar'> <i class='menu-icon fa fa-picture-o'></i>Upload Gambar Soal </a>
                    </li>
					<li>
                        <a href='?bagian=audio'> <i class='menu-icon fa fa-headphones'></i>Upload Audio Listening </a>
                    </li>


					<li>
                        <a href='?bagian=preview'> <i class='menu-icon fa fa-search'></i>Preview Soal Test </a>
                    </li>

					<li>
                        <a href='?bagian=edit'> <i class='menu-icon fa fa-edit'></i>Edit Soal </a>
                    </li>
					<li><a href='admin.php?bagian=reset'> <i class='menu-icon fa fa-refresh'></i>Reset Peserta</a></li>
				<li><a href='admin.php?bagian=status'> <i class='menu-icon fa fa-archive'></i>Aktifkan Test</a></li>
				<li><a href='admin.php?bagian=client'> <i class='menu-icon fa fa-check-square-o'></i>Aktifkan Nilai di Client</a></li>
				<li><a href='admin.php?bagian=acak'> <i class='menu-icon fa fa-random'></i>Acak Soal</a></li>
				<li><a href='admin.php?bagian=hasil'> <i class='menu-icon fa fa-edit'></i>Report Test</a></li>
				
				<li><a href='admin.php?bagian=butir'> <i class='menu-icon fa fa-bar-chart-o'></i>Analisis Butir Soal</a></li>
<li><a href='admin.php?bagian=ulangan'> <i class='menu-icon fa fa-bar-chart-o'></i>Analisis Ulangan</a></li>

				<li><a href='admin.php?bagian=backup'> <i class='menu-icon fa fa-th'></i>Backup Data</a></li>
				<li><a href='admin.php?bagian=hapustest'> <i class='menu-icon fa fa-trash-o'></i>Hapus Test</a></li>
				<li><a href='admin.php?bagian=hapus'> <i class='menu-icon fa fa-trash-o'></i>Hapus Data</a></li>
				<li><a href='admin.php?bagian=restore'> <i class='menu-icon fa fa-share-square-o'></i>Restore Data</a></li> 
			
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id='right-panel' class='right-panel'>

       <div class='col-sm-12 hitam'>

                <div class='col-sm-1'>
                    <a id='menuToggle' class='menutoggle pull-left'><i class='fa fa fa-tasks'></i></a>
                 </div>
				<div class='col-sm-6 float-left putih'>
				<div class='qq'>$ek[nama_sekolah]</div><div class='rr'>$ek[alamat]</div>
				
				</div>
				
				
				
			
			
				
					
				
                <div class='col-sm-5'>
                    <div class='user-area dropdown float-right'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            <img class='user-avatar rounded-circle' src='asset/logo2.png' alt='User Avatar'>
                        </a>

                        <div class='user-menu dropdown-menu'>

                                <a class='nav-link' href='?bagian=password'><i class='fa fa-unlock'></i> &nbsp Ubah Password</a>

                                <a class='nav-link' href='cpanel/index.php'><i class='fa fa-sign-out -off'></i> &nbsp Logout</a>
                        </div>
                    </div>

                  
                </div>
		</div>

    

        <div class='content mt-3'> ";
		
	   
		include "kontenadmin.php";
		   
	echo "	   
        </div>


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


	<script src='js/jquery-3.2.1.min.js'></script>
	<script src='js/popper.min.js'></script>
    <script src='js/plugins.js'></script>
	<script src='js/main1.js'></script>
	

<script>
object.onload = 'document.body.requestFullscreen()'
     
</script>



   
";

}if(isset($_POST['timer'])){	


function get_token($panjang){ 

$token = array( range('A','Z') ); 
$karakter = array(); 
foreach($token as $key=>$val){ foreach($val as $k=>$v){ $karakter[] = $v; } } $token = null; for($i=1; $i<=$panjang; $i++){ 

$token .= $karakter[rand($i, count($karakter) - 1)]; } return $token; } 

$nilaitoken=get_token(6);
mysqli_query($kon,"update ijin set token='$nilaitoken' where id_token='token123'");
}

echo"
<form id='cek_token' method='post'>
<input type='text' name='timer' hidden>
</form>




";
?>

