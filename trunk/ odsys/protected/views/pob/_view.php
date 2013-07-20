<?php
/* @var $this PobController */
/* @var $data Pob */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('REGISTRO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->REGISTRO), array('view', 'id'=>$data->REGISTRO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COD')); ?>:</b>
	<?php echo CHtml::encode($data->cOD->DES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GRU')); ?>:</b>
	<?php echo CHtml::encode($data->GRU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOM')); ?>:</b>
	<?php echo CHtml::encode($data->HOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MUJ')); ?>:</b>
	<?php echo CHtml::encode($data->MUJ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ANO')); ?>:</b>
	<?php echo CHtml::encode($data->ANO); ?>
	<br />


</div>