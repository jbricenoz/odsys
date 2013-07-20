<?php
/* @var $this JefeUPController */
/* @var $data Upje */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CED')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cED->NOM), array('view', 'id'=>$data->CED,'idup'=>$data->COD)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COD')); ?>:</b>
	<?php echo CHtml::encode($data->cOD->DES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODT')); ?>:</b>
	<?php echo CHtml::encode($data->cODT->DES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('POB')); ?>:</b>
	<?php echo CHtml::encode($data->POB); ?>

	<br />


</div>