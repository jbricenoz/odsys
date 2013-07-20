<?php
/* @var $this PermController */
/* @var $model Perm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'perm-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

        <div class="row">
		<?php echo $form->labelEx($model,'REGISTRO'); ?>
		<?php echo $form->textField($model,'REGISTRO'); ?>
		<?php echo $form->error($model,'REGISTRO'); ?>
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
		<?php echo $form->labelEx($model,'CODT'); ?>
		<?php echo $form->dropDownList($model,"CODT", CHtml::listData(Tipos::model()->findAll(array('condition'=>'tipo="infraestructura"')), 'CODT', 'DES'), array('empty'=>' Seleccione el tipo')); ?>
		<?php echo $form->error($model,'CODT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ESTADO'); ?>
		<?php echo $form->dropDownList($model,"ESTADO", CHtml::listData(Tipos::model()->findAll(array('condition'=>'tipo="Estado"')), 'CODT', 'DES'), array('empty'=>' Seleccione el estado')); ?>
		<?php echo $form->error($model,'ESTADO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CODRAYOSX'); ?>
		<?php echo $form->NumberField($model,'CODRAYOSX', array('empty'=>'','placeholder'=>'Solo numeros')); ?>
		<?php echo $form->error($model,'CODRAYOSX'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ESTADORAYOSX'); ?>
		<?php echo $form->dropDownList($model,"ESTADORAYOSX", CHtml::listData(Tipos::model()->findAll(array('condition'=>'tipo="Estado"')), 'CODT', 'DES'), array('empty'=>' Seleccione el estado')); ?>
		<?php echo $form->error($model,'ESTADORAYOSX'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Aceptar'); ?>
                <?php echo CHtml::button('Cancelar', array('submit' => array('index'))); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->