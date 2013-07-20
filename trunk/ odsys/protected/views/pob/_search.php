<?php
/* @var $this PobController */
/* @var $model Pob */
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
		<?php echo $form->label($model,'COD'); ?>
		<?php echo $form->textField($model,'COD'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GRU'); ?>
		<?php echo $form->textField($model,'GRU',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOM'); ?>
		<?php echo $form->textField($model,'HOM'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MUJ'); ?>
		<?php echo $form->textField($model,'MUJ'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ANO'); ?>
		<?php echo $form->textField($model,'ANO',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->