<?php

?>
<style>
img { width: 80%; } // eli kaikki talla oleva kuvat
</style>

<div class="container-fluid" style="min-height:500px;margin-bottom:20px">

<div class="col-sm-offset-5">
<h1>Uutiset</h1>
</div>

<p>Lataa tuoreimmat uutiset<br><br>



<div class="row">
 <div class="col-sm-12">
   <?php
   foreach(array_reverse(glob('uutiset/*.*')) as $file) 
   {

	$explNimi = explode("/",$file);

 	echo '<p><a href="../../'.$file.'">'.end($explNimi).'</a></p>';
	
   }
   ?>
 </div>
</div>

</p>


</div>




