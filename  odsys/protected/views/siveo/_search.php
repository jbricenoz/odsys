<?php
/* @var $this SiveoController */
/* @var $model Siveo */
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
		<?php echo $form->textField($model,'FECHA',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CODT'); ?>
		<?php echo $form->textField($model,'CODT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GRUPO'); ?>
		<?php echo $form->textField($model,'GRUPO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VALOR'); ?>
		<?php echo $form->textField($model,'VALOR',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->