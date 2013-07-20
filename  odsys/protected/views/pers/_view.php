<?php
/* @var $this PersController */
/* @var $data Pers */
?>

<div class="view">
    <?php  echo CHtml::link(CHtml::encode($data->getAttributeLabel('Ver detalles')),array('view','id'=>$data->CED)); ?>
    <b><b><?php echo CHtml::encode($data->NOM); ?>
</div>