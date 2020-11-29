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
	<div class='judultengah'><a href='?hal=detail&id=$b[id]'>$b[judul]</a></div>
	<div class='subtengah'>
				<i><img src='ikon/admin2.png'>+ Posted by $b[user]<img src='ikon/kalender.gif'>"; echo indonesian_date ($tanggal); echo "  
			
	<div class='kontentengahhome'> ";
	
//		$deskripsi = htmlentities(strip_tags($b[konten])); // membuat paragraf pada isi berita dan mengabaikan tag html
    $isi = substr($b['konten'],0,900); // ambil sebanyak 220 karakter
    $isi = substr($b['konten'],0,strrpos($isi," ")); // potong per spasi kalimat	
	$tampil=str_replace('files/' , 'files/.thumbs/', $isi );
	echo "					
							$tampil  &nbsp; &nbsp; .....<br>
			
	";
/*	
	<div class='readmore float-right'>
						<a href='?hal=detail&id=$b[id]'><input type='button' class='btn btn-primary ' value='Read more &raquo'></a>
	</div>
*/
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