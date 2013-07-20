<?php
/* @var $this ContController */
/* @var $model Cont */

$this->breadcrumbs=array(
	'Contratos'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Contratos', 'url'=>array('index')),
	array('label'=>'Buscar registros', 'url'=>array('admin')),
);
?>

<h1>Nuevo registro de horas contratadas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>