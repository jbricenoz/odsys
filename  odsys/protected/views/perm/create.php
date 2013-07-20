<?php
/* @var $this PermController */
/* @var $model Perm */

$this->breadcrumbs=array(
	'Permisos'=>array('index'),
	'Registro',
);

$this->menu=array(
	array('label'=>'Listar Permisos', 'url'=>array('index')),
	array('label'=>'Buscar permisos', 'url'=>array('admin')),
);
?>

<h1>Registrar Permiso</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>