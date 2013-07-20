<?php
/* @var $this PobController */
/* @var $model Pob */

$this->breadcrumbs=array(
	'Población'=>array('index'),
	$model->REGISTRO=>array('view','id'=>$model->REGISTRO),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Población', 'url'=>array('index')),
	array('label'=>'Registar Población', 'url'=>array('create')),
	array('label'=>'Ver poblaciones', 'url'=>array('view', 'id'=>$model->REGISTRO)),
	array('label'=>'Administar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Población <?php echo $model->REGISTRO; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>