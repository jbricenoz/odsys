<?php
/* @var $this PobController */
/* @var $model Pob */

$this->breadcrumbs=array(
	'Población'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Poblaciones', 'url'=>array('index')),
	array('label'=>'Buscar registros', 'url'=>array('admin')),
);
?>

<h1>Registrar Población</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>