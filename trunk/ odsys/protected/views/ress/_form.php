<?php
/* @var $this RessController */
/* @var $model Ress */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ress-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
        
        <div class="row">
		<?php echo $form->labelEx($model,'Registro'); ?>
		<?php echo $form->NumberField($model,'Registro'); ?>
		<?php echo $form->error($model,'Registro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FECHA'); ?>
		<?php
                /*
                 * Esta funcion llama al componente zii.widgets.jui.CJuiDatePicker
                 * Que depliega un calendario en la interface de usuario
                 */
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'language'=>'es',
                    'model'=>$model,'value'=>$model->FECHA,
                    'attribute'=>'FECHA','flat'=>false,
                    'options'=>array('buttonImageOnly'=> true,'constrainInput'=>true,'constrainInput'=>true,
                        'showAnim'=>'slideDown','showButtonPanel'=>'true','mode'=>'focus','dateFormat'=>'yy-mm-dd',
                    ),));
                ?>
		<?php echo $form->error($model,'FECHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COD'); ?>
		<?php echo $form->dropDownList($model,'COD', CHtml::listData(Up::model()->findAll(array('condition'=>'REGION="CHOROTEGA"')), 'COD', 'DES'),array('empty' => ' Seleccione la U.P.')); ?>
		<?php echo $form->error($model,'COD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TOTAL'); ?>
		<?php echo $form->NumberField($model,'TOTAL', array('empty'=>'','placeholder'=>'Solo numeros')); ?>
		<?php echo $form->error($model,'TOTAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'R1'); ?>
		<?php echo $form->NumberField($model,'R1', array('empty'=>'','placeholder'=>'Solo numeros')); ?>
		<?php echo $form->error($model,'R1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'R2'); ?>
		<?php echo $form->NumberField($model,'R2', array('empty'=>'','placeholder'=>'Solo numeros')); ?>
		<?php echo $form->error($model,'R2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'R3'); ?>
		<?php echo $form->NumberField($model,'R3', array('empty'=>'','placeholder'=>'Solo numeros')); ?>
		<?php echo $form->error($model,'R3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'APROV'); ?>
		<?php echo $form->textField($model,'APROV',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'APROV'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save',array('confirm'=>'Seguro que desea realizar la transacción?')); ?>
             <?php echo CHtml::button('Cancelar', array('submit' => array('index'))); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->