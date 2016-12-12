<?php
/* @var $this VideotController */
/* @var $model Videot */

$this->breadcrumbs=array(
	'Videots'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Videot', 'url'=>array('index')),
	array('label'=>'Create Videot', 'url'=>array('create')),
	array('label'=>'Update Videot', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Videot', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Videot', 'url'=>array('admin')),
);
?>

<h1>View Videot #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'time',
		'embed_code',
		'kuvaus',
	),
)); ?>
