<div class="container">
<?php
/* @var $this VideotController */
/* @var $model Videot */

$this->breadcrumbs=array(
	'Videots'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Lisää video', 'url'=>array('create')),
	array('label'=>'Hallitse videoita', 'url'=>array('admin')),
);
?>

<h1>Päivitä video <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div><!--container-->
