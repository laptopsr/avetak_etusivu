<?php

?>
<style>
img { width: 80%; } // eli kaikki talla oleva kuvat
</style>


<div class="container-fluid">

<div class="col-sm-offset-5">
<h1>Kuvapankki</h1>
</div>

<p>
Kuvapankista löytyvät johtohenkilöiden kuvat, logot ja muita yrityksen kuvia. Median edustajat voivat käyttää tarvittaessa kuviamme tarkoituskemukaisiin julkaisuihinsa.<br><br>
Median edustajat voivat olla yhteydessä myös suoraan Avetak Oy:n markkinointipäällikkö Helmi Laitiseen, phelinnumeroon 020181570 tai sähköpostitse helmi.laitinen@e-palkki.fi<br><br>
</p>
<!--<div class="row">
 <div class="col-sm-12">
  <img src="<?php echo Yii::app()->request->baseUrl; ?>/kotisivukuvat/kuvapankki11.jpg" class="thumbnail">
  <br>
  <img src="<?php echo Yii::app()->request->baseUrl; ?>/kotisivukuvat/kuvapankki2.jpg" class="thumbnail">
 </div>
</div> -->
<br><br><br><br>

<div style="height:500px">


<?php

$arr = array(
	'Henkilökuva'=>'henkilokuva1.jpg',
	'Henkilökuva '=>'henkilokuva2.jpg',
	'Logo'=>'yrityslogo1.jpg',
	'Logo '=>'yrityslogo2.jpg',
	'Toiminta'=>'toiminta1.jpg',
	'Toiminta '=>'toiminta2.jpg',
);

foreach($arr as $key=>$tiedosto)
{
echo '
<div class="row">
 <div class="col-sm-2 col-sm-offset-2">
  <img src="'.Yii::app()->request->baseUrl.'/kotisivukuvat/'.$tiedosto.'" class="thumbnail">
 </div>
 <div class="col-sm-2">
  '.$key.'
 </div>
 <div class="col-sm-6">
  <a download="'.$tiedosto.'" href="'.Yii::app()->request->baseUrl.'/kotisivukuvat/'.$tiedosto.'" class="btn btn-primary">Lataa kuva</a>
 </div>
</div>';
}

?>





 </div>
</div><!-- container -->
