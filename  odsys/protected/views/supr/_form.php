<?php
/* @var $this SuprController */
/* @var $model Supr */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'supr-form',
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
		<?php echo $form->labelEx($model,'HUA'); ?>
		<?php echo $form->NumberField($model,'HUA',array('size'=>10,'maxlength'=>10,'empty'=>'','placeholder'=>'Solo numeros')); ?>
		<?php echo $form->error($model,'HUA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HUC'); ?>
		<?php echo $form->NumberField($model,'HUC',array('size'=>10,'maxlength'=>10,'empty'=>'','placeholder'=>'Solo numeros')); ?>
		<?php echo $form->error($model,'HUC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HUCE'); ?>
		<?php echo $form->NumberField($model,'HUCE',array('size'=>10,'maxlength'=>10,'empty'=>'','placeholder'=>'Solo numeros')); ?>
		<?php echo $form->error($model,'HUCE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HUPS'); ?>
		<?php echo $form->NumberField($model,'HUPS',array('size'=>10,'maxlength'=>10,'empty'=>'','placeholder'=>'Solo numeros')); ?>
		<?php echo $form->error($model,'HUPS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HUT'); ?>
		<?php echo $form->NumberField($model,'HUT',array('size'=>10,'maxlength'=>10,'empty'=>'','placeholder'=>'Solo numeros')); ?>
		<?php echo $form->error($model,'HUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HUO'); ?>
		<?php echo $form->NumberField($model,'HUO',array('size'=>10,'maxlength'=>10,'empty'=>'','placeholder'=>'Solo numeros')); ?>
		<?php echo $form->error($model,'HUO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HUAC'); ?>
		<?php echo $form->NumberField($model,'HUAC',array('size'=>10,'maxlength'=>10,'empty'=>'','placeholder'=>'Solo numeros')); ?>
		<?php echo $form->error($model,'HUAC'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save',array('confirm'=>'Seguro que desea realizar la transacción?')); ?>
             <?php echo CHtml::button('Cancelar', array('submit' => array('index'))); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->