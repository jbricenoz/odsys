<?php
/* @var $this CapiController */
/* @var $model Capi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
        
        
         <div class="row">
		<?php echo $form->label($model,'REGISTRO'); ?>
		<?php echo $form->textField($model,'REGISTRO'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'FECHA'); ?>
		<?php echo $form->textField($model,'FECHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COD'); ?>
		<?php echo $form->textField($model,'COD'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INSTALADA'); ?>
		<?php echo $form->textField($model,'INSTALADA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UTILIZADA'); ?>
		<?php echo $form->textField($model,'UTILIZADA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'APROVECHAMIENTO'); ?>
		<?php echo $form->textField($model,'APROVECHAMIENTO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->