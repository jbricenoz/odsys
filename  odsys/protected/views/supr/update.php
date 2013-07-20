<?php
/* @var $this SuprController */
/* @var $model Supr */

$this->breadcrumbs=array(
	'Supervision'=>array('index'),
	$model->REGISTRO=>array('view','id'=>$model->REGISTRO),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Nueva supervision', 'url'=>array('create')),
	array('label'=>'Ver registros', 'url'=>array('view', 'id'=>$model->REGISTRO)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar supervicion de servicio odontologico<?php echo $model->REGISTRO; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>