<?php
/* @var $this PobController */
/* @var $model Pob */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pob-form',
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
		<?php echo $form->labelEx($model,'COD'); ?>
		<?php echo $form->dropDownList($model,'COD', CHtml::listData(Up::model()->findAll(array('condition'=>'REGION="CHOROTEGA"')), 'COD', 'DES'),array('empty' => ' Seleccione la U.P.')); ?>
		<?php echo $form->error($model,'COD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GRU'); ?>
		<?php echo $form->dropDownList($model,"GRU", CHtml::listData(Tipos::model()->findAll(array('condition'=>'tipo="Grupo Etario"')), 'DES', 'DES'), array('empty'=>' Seleccione grupo')); ?>
		<?php echo $form->error($model,'GRU'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HOM'); ?>
		<?php echo $form->NumberField($model,'HOM', array('empty'=>'','placeholder'=>'Solo numeros')); ?>
		<?php echo $form->error($model,'HOM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MUJ'); ?>
		<?php echo $form->NumberField($model,'MUJ', array('empty'=>'','placeholder'=>'Solo numeros')); ?>
		<?php echo $form->error($model,'MUJ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ANO'); ?>
                <?php
                /*
                 * Esta funcion llama al componente zii.widgets.jui.CJuiDatePicker
                 * Que depliega un calendario en la interface de usuario
                 */
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'language'=>'es',
                    'model'=>$model,'value'=>$model->ANO,
                    'attribute'=>'ANO','flat'=>false,  
                    'options'=>array('buttonImageOnly'=> true,'constrainInput'=>true,'constrainInput'=>true,
                        'showAnim'=>'slideDown','showButtonPanel'=>'true','mode'=>'focus','dateFormat'=>'yy',
                    ),));
                ?>
		<?php echo $form->error($model,'ANO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->