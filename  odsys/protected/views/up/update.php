<?php
/* @var $this UpController */
/* @var $model Up */

$this->breadcrumbs=array(
	'Ups'=>array('index'),
	$model->COD=>array('view','id'=>$model->COD),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar U.P', 'url'=>array('index')),
	array('label'=>'Nueva U.P', 'url'=>array('create')),
	array('label'=>'Ver  U.P', 'url'=>array('view', 'id'=>$model->COD)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Unidad Programatica <?php echo $model->COD; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>