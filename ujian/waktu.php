<?php


echo "
               <script type='text/javascript' src='js/jquery-3.2.1.min.js'></script>
               <script type='text/javascript' src='js/jquery.countdownTimer.js'></script>                   
                    
					
					<script>
					
					
					
					
					
					
                                $(function(){
                                    $('#h_timer').countdowntimer({
                                        hours : $ekojam,
                                        minutes :$ekomenit,
										seconds:$ekodetik,														
                                        size : 'lg',
										
										
						                timeUp : timeisUp																														
                                    });
                                });
					function timeisUp() {
					
						document.getElementById('form_cek').submit();
					}
					if($waktu<=3){
						document.getElementById('form_cek').submit();
					}

                            </script>
							";
?>