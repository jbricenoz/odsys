<?php
/* @var $this TiposController */
/* @var $model Tipos */

$this->breadcrumbs=array(
	'Tipologia'=>array('index'),
	$model->CODT=>array('view','id'=>$model->CODT),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Tipos', 'url'=>array('index')),
	array('label'=>'Nuevo Tipo', 'url'=>array('create')),
	array('label'=>'Ver Tipos', 'url'=>array('view', 'id'=>$model->CODT)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar tipo <?php echo $model->CODT; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>