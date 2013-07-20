<?php
/* @var $this CapiController */
/* @var $data Capi */
?>

<div class="view">
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('REGISTRO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->REGISTRO), array('view', 'id'=>$data->REGISTRO)); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA')); ?>:</b>
	<?php echo CHtml::encode($data->FECHA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COD')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cOD->DES),array('view', 'id'=>$data->FECHA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INSTALADA')); ?>:</b>
	<?php echo CHtml::encode($data->INSTALADA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UTILIZADA')); ?>:</b>
	<?php echo CHtml::encode($data->UTILIZADA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('APROVECHAMIENTO')); ?>:</b>
	<?php echo CHtml::encode($data->APROVECHAMIENTO); ?>
	<br />


</div>