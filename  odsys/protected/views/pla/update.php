<?php
/* @var $this PlaController */
/* @var $model Pla */

$this->breadcrumbs=array(
	'Plaza'=>array('index'),
	$model->PLA=>array('view','id'=>$model->PLA),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Plazas', 'url'=>array('index')),
	array('label'=>'Registrar Plaza', 'url'=>array('create')),
	array('label'=>'Ver Plazas', 'url'=>array('view', 'id'=>$model->PLA)),
	array('label'=>'Buscar Plaza', 'url'=>array('admin')),
);
?>

<h1>Actualizar Plaza <?php echo $model->PLA; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>