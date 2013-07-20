<?php
/* @var $this PersController */
/* @var $model Pers */

$this->breadcrumbs=array(
	'Persona'=>array('index'),
	'Nueva persona',
);

$this->menu=array(
	array('label'=>'Lista de Personas', 'url'=>array('index')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Nueva Persona</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>