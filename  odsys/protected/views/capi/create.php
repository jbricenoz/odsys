<?php
/* @var $this CapiController */
/* @var $model Capi */

$this->breadcrumbs=array(
	'Capacidad'=>array('index'),
	'Registrar nuevo',
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Registrar capacidad de servicio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>