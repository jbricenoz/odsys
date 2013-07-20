<?php
/* @var $this PersController */
/* @var $model Pers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pers-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CEDULA'); ?>
		<?php echo $form->textField($model,'CED',array( 'readonly'=>true,'size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CED'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMBRE'); ?>
		<?php echo $form->textField($model,'NOM',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'NOM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TELEFONO'); ?>
		<?php echo $form->textField($model,'TEL',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'TEL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMAIL'); ?>
		<?php echo $form->textField($model,'EMA',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'EMA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Aceptar'); ?>
                <?php echo CHtml::button('Cancelar', array('submit' => array('index'))); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->