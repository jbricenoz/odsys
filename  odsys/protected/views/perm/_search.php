<?php
/* @var $this PermController */
/* @var $model Perm */
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
		<?php echo $form->label($model,'CODT'); ?>
		<?php echo $form->textField($model,'CODT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ESTADO'); ?>
		<?php echo $form->textField($model,'ESTADO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CODRAYOSX'); ?>
		<?php echo $form->textField($model,'CODRAYOSX'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ESTADORAYOSX'); ?>
		<?php echo $form->textField($model,'ESTADORAYOSX',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->