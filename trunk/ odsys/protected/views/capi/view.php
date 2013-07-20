<?php
/* @var $this CapiController */
/* @var $model Capi */

$this->breadcrumbs=array(
	'Capacidad'=>array('index'),
	$model->REGISTRO,
);

$this->menu=array(
	array('label'=>'Listar Registros', 'url'=>array('index')),
	array('label'=>'Registrar capacidad', 'url'=>array('create')),
	array('label'=>'Actualizar capacidad', 'url'=>array('update', 'id'=>$model->REGISTRO)),
	array('label'=>'Eliminar capacidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->REGISTRO),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Ver capacidad del servicio #<?php echo $model->REGISTRO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
                'REGISTRO',
		'FECHA',
		array( 'name'=>'COD','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->cOD->DES),
                        array('up/view','id'=>$model->cOD->COD)),),
		'INSTALADA',
		'UTILIZADA',
		'APROVECHAMIENTO',
	),
)); ?>
