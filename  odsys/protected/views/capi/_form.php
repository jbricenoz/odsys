<?php
/* @var $this CapiController */
/* @var $model Capi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'capi-form',
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
		<?php echo $form->labelEx($model,'INSTALADA'); ?>
		<?php echo $form->textField($model,'INSTALADA'); ?>
		<?php echo $form->error($model,'INSTALADA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UTILIZADA'); ?>
		<?php echo $form->textField($model,'UTILIZADA'); ?>
		<?php echo $form->error($model,'UTILIZADA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'APROVECHAMIENTO'); ?>
		<?php echo $form->textField($model,'APROVECHAMIENTO'); ?>
		<?php echo $form->error($model,'APROVECHAMIENTO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save'); ?>
                <?php echo CHtml::button('Cancelar', array('submit' => array('index'))); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->