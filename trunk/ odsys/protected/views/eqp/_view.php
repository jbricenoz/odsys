<?php
/* @var $this EqpController */
/* @var $data Eqp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PLACA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PLACA), array('view', 'id'=>$data->PLACA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODT')); ?>:</b>
	<?php echo CHtml::encode($data->cODT->DES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COD')); ?>:</b>
	<?php echo CHtml::encode($data->cOD->DES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHAREG')); ?>:</b>
	<?php echo CHtml::encode($data->FECHAREG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->ESTADO); ?>
	<br />


</div>