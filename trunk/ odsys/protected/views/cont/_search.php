<?php
/* @var $this ContController */
/* @var $model Cont */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'PLA'); ?>
		<?php echo $form->textField($model,'PLA',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HCONTRATADAS'); ?>
		<?php echo $form->textField($model,'HCONTRATADAS',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HCONSULTA'); ?>
		<?php echo $form->textField($model,'HCONSULTA',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HADMINISTRATIVAS'); ?>
		<?php echo $form->textField($model,'HADMINISTRATIVAS',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HPROMOCION'); ?>
		<?php echo $form->textField($model,'HPROMOCION',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HTRASLADO'); ?>
		<?php echo $form->textField($model,'HTRASLADO',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HCAPACITACION'); ?>
		<?php echo $form->textField($model,'HCAPACITACION',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HACTACADEMICAS'); ?>
		<?php echo $form->textField($model,'HACTACADEMICAS',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOTROS'); ?>
		<?php echo $form->textField($model,'HOTROS',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OBSERVACIONES'); ?>
		<?php echo $form->textField($model,'OBSERVACIONES',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->