<?php
include "koneksi.php";
echo"	 

   <link rel='stylesheet' href='css/bootstrap.min.css'>
   <link rel='stylesheet' href='css/font-awesome.min.css'>
    <link rel='stylesheet' href='css/datatableandro.css'>

	<style>
    .ukuran{
        font-size: 3px;

    }
 </style>
 
<div class='card'>
                    <div class='card-header'>
        	<i class='mr-2 fa fa-envelope'></i>
                        <strong class='card-title'>Daftar Izin Siswa</strong>
						
						
					
						
                    </div>
                    <div class='card-body'>

                       
		  
		<div class='ukuran'>  
		  
		 <table id='bootstrap-data-table' class='table table-striped table-bordered'>
                    <thead>
				
			<tr><th>Nama</th><th>Kelas</th><th>Tgl<br>Izin</th><th>Izin</th><th>Keterangan</th><th>Opsi</th></tr>
				</thead> 
				<tbody>";
			$asq=mysqli_query($kon, "select * from izin");
			
			while($b=mysqli_fetch_array($asq)){
		
			
 echo "
			<tr><td>$b[nama]</td><td>$b[kelas]</td><td>$b[tanggal]</td><td>$b[izin]</td><td>$b[keterangan]</td><td>
			
			<a href='#eko' data-toggle='terbang' data-id='$b[urutan]' class='button' style='text-decoration:none;'><button type='button' class='btn btn-outline-primary btn-sm'><i class='fa fa-edit'></i></button></a>
			<a href='#eko3' data-toggle='terbang' data-id='$b[urutan]' class='button' style='text-decoration:none;'><button type='button' class='btn btn-outline-danger btn-sm'><i class='fa fa-trash-o'></i></button></a>
			
			
			
			</td></tr>";
			
			}

 echo "
			</tbody>   
            </table>
		
 		</div>
        </div>
</div>
<link rel='stylesheet' href='css/terbang.css'>

 <div class='terbang fade1' id='eko'>
        <div class='terbang-dialog'>
            <div class='terbang-content'>
                <div class='terbang-header'>
                    <button type='button' class='close' data-dismiss='terbang'>&times;</button>
                    <div class='card-header'> <strong> Edit Izin SIswa </strong> </div>
                </div>
                <div class='terbang-body'>
                    <div class='eko2'></div>
                </div>
                <div class='terbang-footer'>
                    <button type='button' class='btn btn-outline-danger btn-sm' data-dismiss='terbang'><i class='fa fa-sign-out'></i>Keluar</button>
                </div>
            </div>
        </div>
    </div>

<div class='terbang fade1' id='eko3'>
        <div class='terbang-dialog'>
            <div class='terbang-content'>
                 <div class='terbang-body'>
                    <div class='eko4'></div>
			
                </div>
                
            </div>
        </div>
    </div>

		
<link rel='stylesheet' href='assets/css/animate.css'>	




</div>

<script src='js/data-table/datatables.min.js'></script>
    <script src='js/data-table/dataTables.bootstrap.min.js'></script>
     <script src='js/data-table/datatables-init.js'></script>

    <script type='text/javascript'>
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script> 
<script>
$('#tambah').click(function() {
    $('.gerak').addClass('animated fadeInDown');
});


</script>
<script type='text/javascript'>
    $(document).ready(function(){
        $('#eko').on('show.bs.terbang', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            $.ajax({
                type : 'post',
                url : 'editizinsiswa1.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.eko2').html(data);
                }
            });
         });
    });

    $(document).ready(function(){
        $('#eko3').on('show.bs.terbang', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            $.ajax({
                type : 'post',
                url : 'hapusizin2.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.eko4').html(data);
                }
            });
         });
    });

		


  </script>
    <script src='js/terbang.js' ></script>
		<script>
        $('#bootstrap-data-table').DataTable ({
responsive : true

            });
            </script>
		 ";
 ?>