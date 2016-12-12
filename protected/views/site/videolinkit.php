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

	$model = new Videot;
	if(isset($_POST['Videot']))
	{
		$model->attributes=$_POST['Videot'];
		if($model->save())
			$this->redirect(array('videolinkit'));
	}
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
				<div class="row">
				 <div class="col-sm-6 col-sm-offset-3">
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









</div><!--container-->
