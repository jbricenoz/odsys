<?php
/* @var $this PermController */
/* @var $data Perm */
?>

<div class="view">
    
        <b><?php echo CHtml::encode($data->getAttributeLabel('REGISTRO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->REGISTRO), array('view', 'id'=>$data->REGISTRO)); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA')); ?>:</b>
	<?php echo CHtml::encode($data->FECHA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COD')); ?>:</b>
	<?php echo CHtml::encode($data->cOD->COD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODT')); ?>:</b>
	<?php echo CHtml::encode($data->cOD->CODT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->ESTADO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODRAYOSX')); ?>:</b>
	<?php echo CHtml::encode($data->CODRAYOSX); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADORAYOSX')); ?>:</b>
	<?php echo CHtml::encode($data->ESTADORAYOSX); ?>
	<br />


</div>