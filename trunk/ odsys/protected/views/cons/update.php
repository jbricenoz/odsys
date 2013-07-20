<?php
/* @var $this ConsController */
/* @var $model Cons */

$this->breadcrumbs=array(
	'Consultas por UP'=>array('index'),
	$model->Registro=>array('view','id'=>$model->Registro),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Nuevo registro', 'url'=>array('create')),
	array('label'=>'Ver registros', 'url'=>array('view', 'id'=>$model->Registro)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar registro de consultas <?php echo $model->Registro; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>