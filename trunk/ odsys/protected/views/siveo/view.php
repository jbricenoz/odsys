<?php
/* @var $this SiveoController */
/* @var $model Siveo */

$this->breadcrumbs=array(
	'Siveos'=>array('index'),
	$model->REGISTRO,
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Registrar nuevo', 'url'=>array('create')),
	array('label'=>'Actualizar registro', 'url'=>array('update', 'id'=>$model->REGISTRO)),
	array('label'=>'Eliminar registro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->REGISTRO),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Buscar registros', 'url'=>array('admin')),
);
?>

<h1>Detalles de siveo #<?php echo $model->REGISTRO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'REGISTRO',
		'FECHA',
		array( 'name'=>'CODT','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->cODT->DES),
		                  array('tipos/view','id'=>$model->cODT->CODT)),),
		'GRUPO',
		'VALOR',
	),
)); ?>
