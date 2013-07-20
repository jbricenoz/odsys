<?php
/* @var $this EqpController */
/* @var $model Eqp */

$this->breadcrumbs=array(
	'Equipamiento'=>array('index'),
	$model->PLACA,
);

$this->menu=array(
	array('label'=>'Listar Equipamiento', 'url'=>array('index')),
	array('label'=>'Nuevo Equipo', 'url'=>array('create')),
	array('label'=>'Actualizar Equipo', 'url'=>array('update', 'id'=>$model->PLACA)),
	array('label'=>'Eliminar Equipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PLACA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Buscar equipo', 'url'=>array('admin')),
);
?>

<h1>Ver equipo #<?php echo $model->PLACA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PLACA',
		array( 'name'=>'CODT','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->cODT->DES),
                        array('tipos/view','id'=>$model->cODT->CODT)),),
		array( 'name'=>'COD','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->cOD->DES),
                        array('up/view','id'=>$model->cOD->COD)),),
		'FECHAREG',
		'ESTADO',
	),
)); ?>
