<?php

echo "
<div id='sample'>
<script src='js/jquery-1.8.0.min.js'></script>

<script src='ckeditor/ckeditor.js'></script>
<link href='ckeditor/contents.css' rel='stylesheet' type='text/css'>
	

<div class='card-header'>
        	<strong>Edit Soal $e[mapel]</strong>
						
             <div class='card-body card-block'>
			
			<form action='sim.php?no=$e[no_soal]&id=$e[id_mapel]&kelas=$e[kelas]' method='post'>
			
			<input type='text' value='$linknya' name='alamat' hidden>
			<br><br>
		
		<b><tr><td> Pertanyaan No. $e[no_soal] </td></tr></b>
		
		<textarea name='j1' id='tanya'>$e[pertanyaan]</textarea>
		
 <script type='text/javascript'>

    var editor = CKEDITOR.replace('tanya');

</script>";
$isi=$_GET['bag'];
if($isi=='a'){

}else{
	echo"
<b><tr><td> Jawaban A </td></tr></b>
	<textarea name='ja' id='ja'> $e[A]</textarea>
		
 <script type='text/javascript'>

    var editor = CKEDITOR.replace('ja');

</script>
<b><tr><td> Jawaban B </td></tr></b>
	<textarea name='jb' id='jb'> $e[B]</textarea>
		
 <script type='text/javascript'>

    var editor = CKEDITOR.replace('jb');

</script>
<b><tr><td> Jawaban C </td></tr></b>
	<textarea name='jc' id='jc'> $e[C]</textarea>
		
 <script type='text/javascript'>

    var editor = CKEDITOR.replace('jc');

</script>
<b><tr><td> Jawaban D </td></tr></b>
	<textarea name='jd' id='jd'> $e[D]</textarea>
		
 <script type='text/javascript'>

    var editor = CKEDITOR.replace('jd');

</script>

<b><tr><td> Jawaban E </td></tr></b>
	<textarea name='je' id='je'> $e[E]</textarea>
		
 <script type='text/javascript'>

    var editor = CKEDITOR.replace('je');

</script> 

<b><tr><td> Kunci </td></tr></b>
	<textarea name='kunci' id='kunci'> $e[kunci]</textarea>
		
 <script type='text/javascript'>

    var editor = CKEDITOR.replace('kunci');

</script> 

	";
}

echo"



<button type='submit' class='btn btn-primary btn-sm'>
                          <i class='fa fa-save'></i> Simpan
</button>



	</form>	
		
		
</div>
			</div>
			
            </div>";
			
?>