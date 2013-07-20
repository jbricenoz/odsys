<?php
/* @var $this PersController */
/* @var $model Pers */

$this->breadcrumbs=array(
	'Persona'=>array('index'),
	$model->CED=>array('view','id'=>$model->CED),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Personas', 'url'=>array('index')),
	array('label'=>'Nueva Persona', 'url'=>array('create')),
	array('label'=>'Ver Persona', 'url'=>array('view', 'id'=>$model->CED)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar persona  <?php echo $model->CED; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>