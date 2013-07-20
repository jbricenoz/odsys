<?php
/* @var $this RessController */
/* @var $model Ress */

$this->breadcrumbs=array(
	'Referencias'=>array('index'),
	$model->Registro=>array('view','id'=>$model->Registro),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Referencias', 'url'=>array('index')),
	array('label'=>'Registrar Referencia', 'url'=>array('create')),
	array('label'=>'Ver Referencias', 'url'=>array('view', 'id'=>$model->Registro)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar referencias <?php echo $model->Registro; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>