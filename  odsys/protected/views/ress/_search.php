<?php
/* @var $this RessController */
/* @var $model Ress */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
        
        <div class="row">
		<?php echo $form->label($model,'Registro'); ?>
		<?php echo $form->textField($model,'Registro'); ?>
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
		<?php echo $form->label($model,'TOTAL'); ?>
		<?php echo $form->textField($model,'TOTAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'R1'); ?>
		<?php echo $form->textField($model,'R1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'R2'); ?>
		<?php echo $form->textField($model,'R2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'R3'); ?>
		<?php echo $form->textField($model,'R3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'APROV'); ?>
		<?php echo $form->textField($model,'APROV',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->