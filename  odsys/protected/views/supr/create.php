<?php
/* @var $this SuprController */
/* @var $model Supr */

$this->breadcrumbs=array(
	'Supervisión'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Buscar registros', 'url'=>array('admin')),
);
?>

<h1>Registrar supervisión</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>