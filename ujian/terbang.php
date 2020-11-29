<?php
echo"
<link rel='stylesheet' href='css/block.css'>
  
 <script type='text/javascript' src='js/jquery-3.2.1.min.js'></script>
 <script type='text/javascript' src='js/bootstrap.js'></script>
<link rel='stylesheet' href='css/terbang.css'>	
<link rel='stylesheet' href='assets/css/animate.css'>	

<a href='#popup'><button type='button' class='btn btn-primary btn-sm float-right' id='tambah'>
                          <i class='fa fa-list-alt'></i> &nbsp;  Cek data
  </button></a>


<div id='popup' class='gerak'>

<div class='window'>

<div class='col col-md-8'>
	<div class='card'>
                    <div class='card-header'>
        	<i class='mr-2 fa fa-align-justify'></i>
                        <strong class='card-title'>Tambah Anggota</strong>
                    </div>
                    <div class='card-body'>

                        
            
            
			


		


                     
		   
		   <div class='card-footer'>
		   <a href='selesai.php'>
                   <button type='submit' class='btn btn-primary btn-sm'><i class='fa fa-dot-circle-o'></i> Submit
                        </button></a>
				
						<input type='button' class='btn btn-danger btn-sm' value='Batal' onClick='history.go(-1);'>
                       </form>   
                      </div>				

 
                   
                   
			
			
			
	
</div>










<script>
$('#tambah').click(function() {
    $('.gerak').addClass('animated fadeInDown');
});

</script>
<script>
$('#tambah').click(function() {
    $('.gerak').addClass('animated fadeInDown');
});


</script>
    <script src='js/terbang.js' ></script>
";
?>