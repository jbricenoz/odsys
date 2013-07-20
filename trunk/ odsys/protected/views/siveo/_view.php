<?php
/* @var $this SiveoController */
/* @var $data Siveo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('REGISTRO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->REGISTRO), array('view', 'id'=>$data->REGISTRO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA')); ?>:</b>
	<?php echo CHtml::encode($data->FECHA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODT')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cODT->DES), array('tipos/view', 'id'=>$data->GRUPO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GRUPO')); ?>:</b>
	   <?php echo CHtml::link(CHtml::encode($data->cODT2->DES), array('tipos/view', 'id'=>$data->GRUPO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VALOR')); ?>:</b>
	<?php echo CHtml::encode($data->VALOR); ?>
	<br />


</div>