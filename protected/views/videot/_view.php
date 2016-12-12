<?php
/* @var $this VideotController */
/* @var $data Videot */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
	<?php echo CHtml::encode($data->time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('embed_code')); ?>:</b>
	<?php echo CHtml::encode($data->embed_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kuvaus')); ?>:</b>
	<?php echo CHtml::encode($data->kuvaus); ?>
	<br />


</div>