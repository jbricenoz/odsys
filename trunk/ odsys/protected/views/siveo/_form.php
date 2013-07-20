<?php
/* @var $this SiveoController */
/* @var $model Siveo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'siveo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php /* echo $form->labelEx($model,'REGISTRO');*/ ?>
		<?php $lIDS = SiveoController::getLastId();
                echo $form->textField($model,'REGISTRO',array('readonly'=>'readonly', 'TYPE'=>"hidden",'value'=>$lIDS+1));  ?>
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
                        'options'=>array('buttonImageOnly'=> true,'constrainInput'=>true,
                            'showAnim'=>'slideDown','currentText'=>'now',

                            'showButtonPanel'=>'true','mode'=>'focus','dateFormat'=>'yy',
                        ),));
                    ?>
		<?php echo $form->error($model,'FECHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CODT'); ?>
		<?php //echo $form->textField($model,'CODT'); ?>
                <?php echo $form->dropDownList($model,'CODT', CHtml::listData(Tipos::model()->findAll(array('condition'=>'tipo="SIVEO"')), 'CODT', 'DES'),array('empty' => ' Seleccione Tipo.')); ?>
		<?php echo $form->error($model,'CODT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GRUPO'); ?>
		<?php echo $form->dropDownList($model,'GRUPO', CHtml::listData(Tipos::model()->findAll(array('condition'=>'tipo="Grupo Etario"')), 'CODT', 'DES'),array('empty' => ' Seleccione grupo.')); ?>
		<?php echo $form->error($model,'GRUPO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VALOR'); ?>
		<?php echo $form->textField($model,'VALOR',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'VALOR'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save',array('confirm'=>'Seguro que desea realizar la transacción?')); ?>
             <?php echo CHtml::button('Cancelar', array('submit' => array('index'))); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->