<div class="container">
<?php

  if( !Yii::app()->user->isGuest and Yii::app()->user->isAdmin())
  {
	echo '
	<div class="row">
	  <div class="col-sm-12">
		<h2 class="alert alert-danger">Olet Admin tilassa</h2>
	 </div>
	</div>
	';

	echo '<p>
		<button class="btn btn-primary btn-group" data-toggle="collapse" data-target="#videoLomakke">Avaa lomakke <i class="caret"></i></button>
		'.CHtml::link('Video hallinta', Yii::app()->request->baseUrl.'/index.php/videot/admin', array('class'=>'btn btn-primary btn-group')).'
	</p>';

	echo '<div id="videoLomakke" class="collapse">';


	echo '
	<div class="row">
	  <div class="col-sm-12">
		'.$this->renderPartial('//videot/_form', array('model'=>$model)).'
	 </div>
	</div>
	';

	echo '</div>';
  }

?>
<style>
img { width: 80%; } // eli kaikki talla oleva kuvat
</style>




<p>
<center><h1>Videoita</h1></center>
<div class="row">
 <div class="col-sm-12">
  <div class="panel panel-default">
    <div class="panel-body">

	<?php
		$criteria = new CDbCriteria;
		$criteria->order = " id DESC ";
		$videot = Videot::model()->findAll($criteria);
		if( count($videot) > 0 )
		{
			foreach($videot as $item)
			{
				echo '
				<div class="row videoWrapperOuter">
				 <div class="col-sm-6 videoWrapperInner">
					'.$item->embed_code.'<br>
					<p><b>'.date("d.m.Y", strtotime($item->time)).'</b>: '.$item->kuvaus.'</p>
				 </div>
				</div>
				';
			}
		}
	?>

    </div>
  </div>
 </div>
</div>
</p>



<style>
.videoWrapperOuter {
  max-width:640px; 
  margin-left:auto;
  margin-right:auto;
}
.videoWrapperInner {
  float: none;
  clear: both;
  width: 100%;
  position: relative;
  padding-bottom: 50%;
  padding-top: 25px;
  height: 0;
}
.videoWrapperInner iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
</style>






</div><!--container-->
