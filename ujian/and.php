<?php
include "system/koneksi.php";
$akun=mysqli_query($kon, "select*from admin");
$f=mysqli_fetch_array($akun);
echo "
 <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
<link rel='stylesheet' href='css/kop.css'>
<link rel='stylesheet' href='css/responsive.css'>
<link rel='stylesheet' href='css/main.css'>
<link rel='stylesheet' href='css/util.css'>
<link rel='stylesheet' href='css/bootstrap.css'>
<link rel='stylesheet' type='text/css' href='css/font-awesome.min.css'>
<link rel='stylesheet' href='css/and.css'>

";


if(isset($_POST['masuk'])){	

	function antiinjection($data){
  $filter_sql = mysqli_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;

}

	
		
		$login=mysqli_query($kon, "select * from peserta where no_ujian='$_POST[username]' and password='$_POST[pass]'");
$ketemu=mysqli_num_rows($login);
$e=mysqli_fetch_array($login);
		
		
		
	if ($ketemu>0){
		


	
 	echo "<script>;window.location='awal.php?id=$e[no_ujian]&kode=1'</script>";


	}else {
		echo "

				<div class='col-sm-12' >
                <div class='alert  alert-danger alert-dismissible fade show' role='alert'>
                  <span class='badge badge-pill badge-danger'>Gagal</span> &nbsp; User atau Password Salah !!!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div>";

	}
}

echo "
<br><br>
<div class='col-sm-10 tengah'>
<div class='logo'><img src='asset/$f[foto]' width='110px'> </div>
<div class='col-sm-10 tengah modif'>

<form class='login100-form validate-form flex-sb flex-w' action='#' method='post'>
				<input type='text' name='masuk' hidden>
					

					
					
					
					<div class='wrap-input100 validate-input m-b-36' data-validate = 'Username tidak boleh kosong'>
						<input class='input100' type='text' name='username' placeholder='Username' >
						<span class='focus-input100'></span>
					</div>
					
				
					<div class='wrap-input100 validate-input m-b-12' data-validate = 'Password tidak boleh kosong'>
						<span class='btn-show-pass'>
							<i class='fa fa-eye'></i>
						</span>
						<input class='input100' type='password' name='pass' placeholder='Password' >
						<span class='focus-input100'></span>
					</div>
					
					

					<div class='container-login100-form-btn'>
						<input type='submit' value='Login' class='btn btn-success btn-block tulisan'>
					</div>

				</form>
</div>
</div>






<script src='js/jquery-3.2.1.min.js'></script>
<script src='js/main.js'></script>
<script src='js/plugins.js'></script>



";
?>