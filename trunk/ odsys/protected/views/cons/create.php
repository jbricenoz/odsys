<?php
/* @var $this ConsController */
/* @var $model Cons */

$this->breadcrumbs=array(
	'Consultas por UP'=>array('index'),
	'Nuevo registro',
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Buscar registros', 'url'=>array('admin')),
);
?>

<h1>Nuevo registro de consultas por UP</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>