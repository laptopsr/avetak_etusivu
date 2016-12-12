<?php
/* @var $this VideotController */
/* @var $model Videot */
/* @var $form CActiveForm */
?>

<div class="form row">
 <div class="col-sm-4">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'videot-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'embed_code'); ?>
		<?php echo $form->textArea($model,'embed_code',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'embed_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kuvaus'); ?>
		<?php echo $form->textArea($model,'kuvaus',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'kuvaus'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Luo uusi video' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
 </div>
</div><!-- form -->
