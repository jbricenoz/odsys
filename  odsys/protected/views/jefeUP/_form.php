<?php
/* @var $this JefeUPController */
/* @var $model Upje */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'upje-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CED'); ?>
		<?php echo $form->dropDownList($model,'CED', CHtml::listData(Pers::model()->findAll(), 'CED', 'NOM'),array('empty' => ' Seleccione la persona')); ?>
		<?php echo $form->error($model,'CED'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COD'); ?>
		<?php echo $form->dropDownList($model,'COD', CHtml::listData(Up::model()->findAll(array('condition'=>'REGION="CHOROTEGA"')), 'COD', 'DES'),array('empty' => ' Seleccione la U.P.')); ?>
		<?php echo $form->error($model,'COD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CODT'); ?>
		<?php echo $form->dropDownList($model,"CODT", CHtml::listData(Tipos::model()->findAll(array('condition'=>'tipo="Tipo servicio"')), 'DES', 'DES'), array('empty'=>' Seleccione tipo de servicio')); ?>
		<?php echo $form->error($model,'CODT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'POB'); ?>
		<?php echo $form->textField($model,'POB'); ?>
		<?php echo $form->error($model,'POB'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save',array('confirm'=>'Seguro que desea realizar la transacción?')); ?>
                <?php echo CHtml::button('Cancelar', array('submit' => array('index'))); ?>

	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->