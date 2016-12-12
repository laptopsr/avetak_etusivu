<div class="container">
<?php
/* @var $this VideotController */
/* @var $model Videot */

$this->breadcrumbs=array(
	'Videots'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Hallitse videoita', 'url'=>array('admin')),
);
?>

<h1>Lisää video</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div><!--container-->
