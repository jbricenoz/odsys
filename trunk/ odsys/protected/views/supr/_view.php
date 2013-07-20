<?php
/* @var $this SuprController */
/* @var $data Supr */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('REGISTRO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->REGISTRO), array('view', 'id'=>$data->REGISTRO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA')); ?>:</b>
	<?php echo CHtml::encode($data->FECHA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COD')); ?>:</b>
	<?php echo CHtml::encode($data->cOD->DES); ?>
	<br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('HUA')); ?>:</b>
	<?php echo CHtml::encode($data->HUA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HUC')); ?>:</b>
	<?php echo CHtml::encode($data->HUC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HUCE')); ?>:</b>
	<?php echo CHtml::encode($data->HUCE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HUPS')); ?>:</b>
	<?php echo CHtml::encode($data->HUPS); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('HUT')); ?>:</b>
	<?php echo CHtml::encode($data->HUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HUO')); ?>:</b>
	<?php echo CHtml::encode($data->HUO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HUAC')); ?>:</b>
	<?php echo CHtml::encode($data->HUAC); ?>
	<br />

	*/ ?>

</div>