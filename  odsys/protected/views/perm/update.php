<?php
/* @var $this PermController */
/* @var $model Perm */

$this->breadcrumbs=array(
	'Permisos'=>array('index'),
	$model->REGISTRO=>array('view','id'=>$model->REGISTRO),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Permisos', 'url'=>array('index')),
	array('label'=>'Resgistrar Permiso', 'url'=>array('create')),
	array('label'=>'Ver Permisos', 'url'=>array('view', 'id'=>$model->REGISTRO)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Permiso <?php echo $model->REGISTRO; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>