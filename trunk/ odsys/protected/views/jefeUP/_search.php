<?php
/* @var $this JefeUPController */
/* @var $model Upje */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CED'); ?>
		<?php echo $form->textField($model,'CED',array('size'=>50,'maxlength'=>50)); ?>
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
		<?php echo $form->label($model,'POB'); ?>
		<?php echo $form->textField($model,'POB'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->