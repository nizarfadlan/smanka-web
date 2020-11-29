<?php

echo "


<div class='bingkai fixed-top'>
		<div class='boxkiri kekiri'>
			<div class='gb1 kekiri'> <img src='asset/$f[foto]'> </div>
		<div class='judul1 kekiri'>$f[nama_sekolah]</div>
		</div>
		<div class='boxkanan kekanan'>
		<div class='gb2 kekiri'>";
if(empty($e['foto'])){ 
echo "<img src='asset/avatar.gif'>";
}else{ 
echo "<img src='foto/thumbs/$e[foto]'>";
}
echo "
</div>
			<div class='judul2 kekiri'> SELAMAT DATANG <BR> $e[nama] <div class='keluar'><a href='logout.php?user=$e[nama]'> Logout</a></div></div>
		</div>
</div> 
<div class='turun'></div>


";
?>