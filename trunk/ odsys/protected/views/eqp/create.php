<?php
/* @var $this EqpController */
/* @var $model Eqp */

$this->breadcrumbs=array(
	'Equipo'=>array('index'),
	'Registrar nuevo',
);

$this->menu=array(
	array('label'=>'Listar Equipos', 'url'=>array('index')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Registrar equipo nuevo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>