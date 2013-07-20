<?php
/* @var $this ConsController */
/* @var $model Cons */
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
		<?php echo $form->label($model,'CODT'); ?>
		<?php echo $form->textField($model,'CODT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'C1VESALANO'); ?>
		<?php echo $form->textField($model,'C1VESALANO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CSUBSECUENTE'); ?>
		<?php echo $form->textField($model,'CSUBSECUENTE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'APREVENTIVA'); ?>
		<?php echo $form->textField($model,'APREVENTIVA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ACURATIVA'); ?>
		<?php echo $form->textField($model,'ACURATIVA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PROMHORAS'); ?>
		<?php echo $form->textField($model,'PROMHORAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PROMACTIV'); ?>
		<?php echo $form->textField($model,'PROMACTIV'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->