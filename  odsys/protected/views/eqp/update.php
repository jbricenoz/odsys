<?php
/* @var $this EqpController */
/* @var $model Eqp */

$this->breadcrumbs=array(
	'Equipo'=>array('index'),
	$model->PLACA=>array('view','id'=>$model->PLACA),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Equipo', 'url'=>array('index')),
	array('label'=>'Registrar Equipo', 'url'=>array('create')),
	array('label'=>'Ver Equipos', 'url'=>array('view', 'id'=>$model->PLACA)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar equipo <?php echo $model->PLACA; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>