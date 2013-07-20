<?php
/* @var $this InfraController */
/* @var $data Infra */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Registro')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Registro), array('view', 'id'=>$data->Registro)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA')); ?>:</b>
	<?php echo CHtml::encode($data->FECHA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODT')); ?>:</b>
	<?php echo CHtml::encode($data->cOD->CODT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COD')); ?>:</b>
	<?php echo CHtml::encode($data->cOD->COD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->ESTADO); ?>
	<br />


</div>