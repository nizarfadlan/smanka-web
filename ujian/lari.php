<?php

echo "
<script src='js/jquery-3.2.1.min.js'></script>
<script>
if(screen.width <=699){
	document.location = 'and.php';
}else{
	document.location = 'index.php';
}
</script>
";
?>