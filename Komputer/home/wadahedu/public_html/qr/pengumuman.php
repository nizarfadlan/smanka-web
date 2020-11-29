<?php
include "koneksi.php";
include "system/tanggal.php";

	


$dataPerPage = 4;


if(isset($_GET['page']))
{
    $noPage = $_GET['page'];
} 
else $noPage = 1;

// perhitungan offset

$offset = ($noPage - 1) * $dataPerPage;



$hasil = mysqli_query($kon, "SELECT * FROM artikel WHERE publish='Y' order by tgl DESC LIMIT $offset, $dataPerPage");



		
		$no=$noPage+1; // Agar angka (penomoran) mengikuti paging ====================================================
		while($b=mysqli_fetch_array($hasil)){
			 $tanggal=$b['tgl'];
echo "
<link rel='stylesheet' href='css/add.css'>
<div class='tengah'>
	<div class='judultengah'>$b[judul]</div>
	<div class='subtengah'>
				<i><img src='ikon/admin2.png'>+ Posted by $b[user]<img src='ikon/kalender.gif'>"; echo indonesian_date ($tanggal); echo "  
	</div>		
	<div class='kontentengahhome'> 		
							$b[konten]
			
	";

echo"
	<div class='clear'></div>	
	
	</div>
	<div class='clear'></div>
	</div> ";
	$no++;
}
echo "
<div class='paging'> ";
// pagenitationnnnnnnnnnnnnnnnn====================================================================		
	//Langkah 3: Hitung total data dan halaman serta link 1,2,3 ... 

$hasil  = mysqli_query($kon, "SELECT COUNT(*) AS jumData FROM artikel WHERE publish='Y'");
$data   = mysqli_fetch_array($hasil);

$jumData = $data['jumData'];

// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data

$jumPage = ceil($jumData/$dataPerPage);

// menampilkan link previous

if ($noPage > 1) echo  "<div class='first'><a href='".$_SERVER['PHP_SELF']."?hal=home&page=".($noPage-1)."'>&laquo</a></div>";

// memunculkan nomor halaman dan linknya

for($page = 1; $page <= $jumPage; $page++)
{
         if ((($page >= $noPage - 8) && ($page <= $noPage + 8)) || ($page == 1) || ($page == $jumPage)) 
         { 
            
            if ($page == $noPage) echo " <li><b>".$page." </b></li>";
            else echo " <a href='?hal=home&page=".$page."'>".$page."</a> ";
             
			     
         }
}

// menampilkan link next

if ($noPage < $jumPage) echo "<div class='end'><a href='".$_SERVER['PHP_SELF']."?hal=home&page=".($noPage+1)."'>&raquo</a></div>";

echo "
</div> ";

?>