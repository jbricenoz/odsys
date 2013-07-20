<?php
/* @var $this TiposController */
/* @var $model Tipos */

$this->breadcrumbs=array(
	'Tiposlogia'=>array('index'),
	'Nuevo registro',
);

$this->menu=array(
	array('label'=>'Listar Tipos', 'url'=>array('index')),
	array('label'=>'Buscar Tipos', 'url'=>array('admin')),
);
?>

<h1>Create Tipos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>