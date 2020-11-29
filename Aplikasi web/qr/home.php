<?php
echo "

 <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Presensi</title>
    <meta name='description' content='Eko Timo'>
    <meta name='viewport' content='width=device-width' initial-scale=1'>

    <link rel='shortcut icon' href='favicon.ico'>

    <link rel='stylesheet' href='css/bootstrap.css'>
    <link rel='stylesheet' href='css/font-awesome.min.css'>
	

    <link rel='stylesheet' href='css/style.css'>
	<link rel='stylesheet' href='css/custom.css'>";
	
	/*
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
			<div class='card-footer'><a href='index.php'>
                        <button type='submit' class='btn btn-primary btn-block'>
                          <i class='fa fa-dot-circle-o'></i> Login
                        </button></a>
						

						";
}
else{
	*/
	include"koneksi.php";
	$sekolah=mysqli_query($kon, "select * from sekolah where id_sekolah='1'");
	$g=mysqli_fetch_array($sekolah);
echo "
	
	  <aside id='left-panel' class='left-panel'>
        <nav class='navbar navbar-expand-sm navbar-default'>

            <div class='navbar-header'>
                <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#main-menu' aria-controls='main-menu' aria-expanded='false' aria-label='Toggle navigation'>
                    <i class='fa fa-bars'></i>
                </button>
       
                <a class='navbar-brand hidden' href=''><img src='asset/logo2.png' alt='Logo'></a>
            </div>

            <div id='main-menu' class='main-menu collapse navbar-collapse'>
                <ul class='nav navbar-nav'>
                    <li class='active'>
                        <a href='?state=dashboard'> <i class='menu-icon fa fa-dashboard'></i>Dashboard </a>
                    </li>
                    <h3 class='menu-title'>Profil Sekolah</h3>
                    
                    <li>
                        <a href='?state=sekolah'> <i class='menu-icon fa fa-home'></i>Identitas Sekolah </a>
                    </li>
                     <li>
                        <a href='?state=pengumuman'> <i class='menu-icon fa fa-bullhorn'></i>Pengumuman Sekolah </a>
                    </li>
					 <li>
                        <a href='?state=daftarkelas'> <i class='menu-icon fa fa-user-md'></i>Daftar Kelas </a>
                    </li>
					
			
					<h3 class='menu-title'>Data Personal</h3>
                    
                    <li>
                        <a href='?state=daftar'> <i class='menu-icon fa fa-users'></i>Daftar Siswa </a>
                    </li>
                    <li>
                        <a href='?state=uploadsiswa'> <i class='menu-icon fa fa-upload'></i>Upload Siswa Excel</a>
                    </li>
 <li>
                        <a href='?state=uploadfoto'> <i class='menu-icon fa fa-camera-retro'></i>Upload Foto Siswa </a>
                    </li>

					<li>
                        <a href='?state=jadwalpersonal'> <i class='menu-icon fa fa-table'></i>Jadwal Siswa </a>
                    </li>
					<li>
                        <a href='?state=jadwal'> <i class='menu-icon fa fa-clock-o'></i>Jadwal </a>
                    </li>
					<li>
                        <a href='?state=haribesar'> <i class='menu-icon fa fa-calendar'></i>Input Hari Besar </a>
                    </li>
				
					<h3 class='menu-title'>Managemen Presensi</h3>
                 
					
                    <li>
                        <a href='?state=izin'> <i class='menu-icon fa fa-envelope-o'></i>Input Izin </a>
                    </li>
					<li>
                        <a href='?state=rekapizin'> <i class='menu-icon fa fa-envelope-o'></i>Rekap Izin </a>
                    </li> 
				

					<li>
                        <a href='?state=rekap'> <i class='menu-icon fa fa-user'></i> Rekap Personal</a>
                    </li>
						<li>
                        <a href='?state=rekapkelas'> <i class='menu-icon fa fa-home'></i> Rekap Kelas</a>
                    </li>
					
                   	<h3 class='menu-title'>Managemen Kelas</h3>
					<li>
                        <a href='?state=naik'> <i class='menu-icon fa fa-gift'></i> Naik Kelas</a>
                    </li>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id='right-panel' class='right-panel '>

        <!-- Header-->
        <header id='header' class='header '>

            <div class='header-menu'>

                <div class='col-sm-7'>
                    <a id='menuToggle' class='menutoggle pull-left'><i class='fa fa fa-tasks'></i></a>
                 
                </div>


            </div>

  

        <div class='col-sm-12 keatas hitam'>
            <div class='col-sm-6'>
                <div class='page-header float-left'>
                    <img src='asset/$g[logo]' width='75px'><div class='namasekolah'>$g[nama_sekolah] <br> $g[alamat]</div>
                </div>
            </div>
          
<div class='col-sm-6'> 
                  <div class='user-area dropdown float-right'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            <img class='user-avatar rounded-circle float-right' src='asset/$g[logo]' alt='User Avatar'>
                        </a>

                        <div class='user-menu dropdown-menu'>
                                <a class='nav-link' href='#'><i class='fa fa- user'></i>My Profile</a>

                                <a class='nav-link' href='?state=password'><i class='fa fa -cog'></i>Ubah Password</a>

                                <a class='nav-link' href='?state=keluar'><i class='fa fa-power -off'></i>Logout</a>
                        </div>
                    </div>

                 </div>   

                </div>

<div class='namasekolah1'>Wadah-Edukasi</div>
    


	<script src='js/jquery-3.2.1.min.js'></script>
	<script src='js/popper.min.js'></script>
    <script src='js/plugins.js'></script>
	<script src='js/main1.js'></script>
<div class='col-md-12'>
	
	
	";
		
		include "main.php";
		
echo "	


 </div> 

 
";
// }
?>