<?php
/* @var $this ContController */
/* @var $model Cont */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cont-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'PLA'); ?>
		<?php echo $form->textField($model,'PLA',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'PLA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HCONTRATADAS'); ?>
		<?php echo $form->NumberField($model,'HCONTRATADAS',array('empty'=>'','placeholder'=>'Solo numeros'),array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HCONTRATADAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HCONSULTA'); ?>
		<?php echo $form->NumberField($model,'HCONSULTA',array('empty'=>'','placeholder'=>'Solo numeros'),array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HCONSULTA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HADMINISTRATIVAS'); ?>
		<?php echo $form->NumberField($model,'HADMINISTRATIVAS',array('empty'=>'','placeholder'=>'Solo numeros'),array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HADMINISTRATIVAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HPROMOCION'); ?>
		<?php echo $form->NumberField($model,'HPROMOCION',array('empty'=>'','placeholder'=>'Solo numeros'),array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HPROMOCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HTRASLADO'); ?>
		<?php echo $form->NumberField($model,'HTRASLADO',array('empty'=>'','placeholder'=>'Solo numeros'),array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HTRASLADO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HCAPACITACION'); ?>
		<?php echo $form->NumberField($model,'HCAPACITACION',array('empty'=>'','placeholder'=>'Solo numeros'),array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HCAPACITACION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HACTACADEMICAS'); ?>
		<?php echo $form->NumberField($model,'HACTACADEMICAS',array('empty'=>'','placeholder'=>'Solo numeros'),array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HACTACADEMICAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HOTROS'); ?>
		<?php echo $form->NumberField($model,'HOTROS',array('empty'=>'','placeholder'=>'Solo numeros'),array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HOTROS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OBSERVACIONES'); ?>
		<?php echo $form->textArea($model,'OBSERVACIONES',array('empty'=>'','placeholder'=>'Texto aqui!'),array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'OBSERVACIONES'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save'); ?>
                <?php echo CHtml::button('Cancelar', array('submit' => array('index'))); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->