<?php
include "koneksi.php";
echo "
 <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />

    <link rel='stylesheet' href='css/bootstrap.min.css'>
    <link rel='stylesheet' href='css/font-awesome.min.css'>

    <link rel='stylesheet' href='scss/style.css'>
	
<link rel='stylesheet' type='text/css' href='css/util.css'>
	<link rel='stylesheet' type='text/css' href='css/main.css'>
        <div class='atas fixed-top'> ";
          
   if(isset($_POST['login'])){       
include "koneksi.php";


$username = $_POST['username'];
$pass     = md5($_POST['pass']);

$login=mysqli_query( $kon,"select * from admin where user='$username' and password='$pass'");
$find=mysqli_num_rows($login);
$a=mysqli_fetch_array($login);
	
	if ($find>0){

	
 	echo "<script>;window.location='home.php?state=dashboard'</script>";
}else{
	echo "
						
						
						
						    <div class='col-sm-12 '>
                <div class='alert  alert-danger alert-dismissible fade show' role='alert'>
                  <span class='badge badge-pill badge-danger'>Gagal</span> Username atau Password SALAH!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div>
			";

}
   }
 
   $logonya=mysqli_query($kon, " select * from sekolah where id_sekolah='1' ");
   $er=mysqli_fetch_array($logonya);

     echo "
<div class='limiter'>
		<div class='container-login100'>
			<div class='wrap-login100 p-l-20 p-r-20 p-t-20 p-b-55' >
				<form action='#' method='post'>
					<span class='login100-form-title p-b-32 '>
					<div class='cen'>
						<img src='asset/$er[logo]' height='140px' class=''></div>
					</span>

					<span class='txt1 p-b-11'>
						Username
					</span>
					<input type='text' name='login' hidden/>
					
					<div class='wrap-input100 validate-input m-b-36' data-validate = 'Username is required'>
						<input class='input100' type='text' name='username' placeholder='Username' >
						<span class='focus-input100'></span>
					</div>
					
					<span class='txt1 p-b-11'>
						Password
					</span>
					<div class='wrap-input100 validate-input m-b-12' data-validate = 'Password is required'>
						<span class='btn-show-pass'>
							<i class='fa fa-eye'></i>
						</span>
						<input class='input100' type='password' name='pass' placeholder='Password' >
						<span class='focus-input100'></span>
					</div>
					
					

					<div class='container-login100-form-btn'>
						<input type='submit' value='Login' class='btn btn-primary btn-block'>
					</div>

				</form>
			</div>
		</div>
	</div>
	




<script src='js/jquery-3.2.1.min.js'></script>


    <script src='js/plugins.js'></script>	
<script src='js/main.js'></script>




";
?>