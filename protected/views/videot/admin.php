<div class="container">
<?php
/* @var $this VideotController */
/* @var $model Videot */

$this->breadcrumbs=array(
	'Videots'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lisää video', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#videot-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Hallitse videoita</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'videot-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'time',
		'embed_code',
		'kuvaus',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>


</div><!--container-->
