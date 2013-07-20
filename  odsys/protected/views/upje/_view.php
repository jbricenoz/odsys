<?php
/* @var $this UpjeController */
/* @var $data Upje */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CED')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CED), array('view', 'id'=>$data->CED)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COD')); ?>:</b>
	<?php echo CHtml::encode($data->cOD->COD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODT')); ?>:</b>
	<?php echo CHtml::encode($data->cODT->CODT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('POB')); ?>:</b>
	<?php echo CHtml::encode($data->POB); ?>
	<br />


</div>