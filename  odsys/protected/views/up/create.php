<?php
/* @var $this UpController */
/* @var $model Up */

$this->breadcrumbs=array(
	'Unidad Programatica'=>array('index'),
	'Nueva',
);

$this->menu=array(
	array('label'=>'Listar U.P', 'url'=>array('index')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Registrar Nueva  Unidad Programatica</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>