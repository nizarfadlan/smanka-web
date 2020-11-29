<?php
echo "
<link rel='stylesheet' href='css/bootstrap.css'>
<link rel='stylesheet' href='css/timer.css'>
<div class='card'>
                    <div class='card-header'>
                        Upcomming Event countdown timer
                    </div>
                    <div class='card-block'>
    	                <div id='countdown'>
            	            <div class='well'>
                        	    <span id='hour' class='timer bg-success'></span>
                        	    <span id='min' class='timer bg-info'></span>
                        	    <span id='sec' class='timer bg-primary'></span>
                        	</div>
                    	</div>
                    </div>

<script src='js/bootstrap.min.js'></script>
<script src='js/jquery-3.2.1.min.js'></script>
<script>
$( document ).ready(function() {
  setInterval(function time(){
  var d = new Date();
  var hours = 24 - d.getHours();
  var min = 60 - d.getMinutes();
  if((min + '').length == 1){
    min = '0' + min;
  }
  var sec = 60 - d.getSeconds();
  if((sec + '').length == 1){
        sec = '0' + sec;
  }
  jQuery('#countdown #hour').html(hours);
  jQuery('#countdown #min').html(min);
  jQuery('#countdown #sec').html(sec);
}, 1000); });
</script>
";

?>