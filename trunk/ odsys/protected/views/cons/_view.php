<?php
/* @var $this ConsController */
/* @var $data Cons */
?>

<div class="view">

	<b><?php //echo CHtml::encode($data->getAttributeLabel('Registro')); ?></b>
	<?php echo CHtml::link(CHtml::encode($data->Registro), array('view', 'id'=>$data->Registro)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA')); ?>:</b>
	<?php echo CHtml::encode($data->FECHA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COD')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cOD->DES), array('view', 'id'=>$data->Registro)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODT')); ?>:</b>
        <?php echo CHtml::encode('Cod'); ?>:
        <?php echo CHtml::encode($data->CODT); ?> - 
	(<?php echo CHtml::link(CHtml::encode($data->cODT->DES), array('Tipos/view', 'id'=>$data->CODT)); ?>)
	<br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('C1VESALANO')); ?>:</b>
	<?php echo CHtml::encode($data->C1VESALANO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CSUBSECUENTE')); ?>:</b>
	<?php echo CHtml::encode($data->CSUBSECUENTE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('APREVENTIVA')); ?>:</b>
	<?php echo CHtml::encode($data->APREVENTIVA); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ACURATIVA')); ?>:</b>
	<?php echo CHtml::encode($data->ACURATIVA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PROMHORAS')); ?>:</b>
	<?php echo CHtml::encode($data->PROMHORAS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PROMACTIV')); ?>:</b>
	<?php echo CHtml::encode($data->PROMACTIV); ?>
	<br />

	*/ ?>

</div>