<?php

?>
<style>
img { width: 80%; } // eli kaikki talla oleva kuvat
</style>


<div class="container-fluid">

<div class="col-sm-offset-5">
<h1>Media</h1>
</div>

<p>
Mediapalvelusn avulla medianedustajat saavat yhteystietoja ja ajankohtaisia asioita suoraan Avetak Oy:n henkilöstöltä, tiedotteista ja kuvapankista. Palvellemme arkisin klo 9-16. Meidät tavoittaa sähköpostitse avetak@avetak.fi<br><br>
Median edustajat voivat olla yhteydessä myös suoraan Avetak Oy:n markkinointipäällikkö Helmi Laitiseen, phelinnumeroon 020181570 tai sähköpostitse helmi.laitinen@e-palkki.fi<br><br>


<h3>Mediatiedotteet</h3><br>
Mediatiedotteista löytyvät uusimmat medialle suunnatut tiedotteet. Median edustajat voivat käyttää tarvittaessa tiedotteita tarkoituksenmukaisiin julkaisuihinta.<br><br>


<div class="row">
 <div class="col-sm-12">
   <?php
   foreach(array_reverse(glob('mediatiedotteet/*.*')) as $file) 
   {

	$explNimi = explode("/",$file);

 	echo '<p><a href="../../'.$file.'">'.end($explNimi).'</a></p>';
	
   }
   ?>
 </div>
</div>


<h3>Mediajulkaisut</h3><br>
Uusimmat mediajulkaisut<br><br>
</p>

<div class="row">
 <div class="col-sm-12">
   <?php
   foreach(array_reverse(glob('mediajulkaisut/*.*')) as $file) 
   {

	$explNimi = explode("/",$file);

 	echo '<p><a href="../../'.$file.'">'.end($explNimi).'</a></p>';
	
   }
   ?>
 </div>
</div>


</div>
<br><br>
