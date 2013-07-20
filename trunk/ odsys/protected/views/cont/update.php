<?php
/* @var $this ContController */
/* @var $model Cont */

$this->breadcrumbs=array(
	'Contratos'=>array('index'),
	$model->PLA=>array('view','id'=>$model->PLA),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Nuevo registro', 'url'=>array('create')),
	array('label'=>'Ver registros', 'url'=>array('view', 'id'=>$model->PLA)),
	array('label'=>'Buscar registros', 'url'=>array('admin')),
);
?>

<h1>Update Cont <?php echo $model->PLA; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>