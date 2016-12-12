<?php
/* @var $this VideotController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Videots',
);

$this->menu=array(
	array('label'=>'Create Videot', 'url'=>array('create')),
	array('label'=>'Manage Videot', 'url'=>array('admin')),
);
?>

<h1>Videots</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
