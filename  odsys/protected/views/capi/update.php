<?php
/* @var $this CapiController */
/* @var $model Capi */

$this->breadcrumbs=array(
	'Capacidad'=>array('index'),
	$model->REGISTRO=>array('view','id'=>$model->REGISTRO),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar registrar', 'url'=>array('index')),
	array('label'=>'Resgistrar Capacidad', 'url'=>array('create')),
	array('label'=>'Ver registros', 'url'=>array('view', 'id'=>$model->REGISTRO)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar capacidad del servicio<?php echo $model->REGISTRO; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>