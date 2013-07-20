<?php
/* @var $this UpController */
/* @var $data Up */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('COD')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->COD), array('view', 'id'=>$data->COD)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DES')); ?>:</b>
	<?php echo CHtml::encode($data->DES); ?>
	<br />
</div>