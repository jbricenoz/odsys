<?php
/* @var $this TiposController */
/* @var $data Tipos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODT')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CODT), array('view', 'id'=>$data->CODT)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIPO')); ?>:</b>
	<?php echo CHtml::encode($data->TIPO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DES')); ?>:</b>
	<?php echo CHtml::encode($data->DES); ?>
	<br />


</div>