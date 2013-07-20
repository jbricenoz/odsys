<?php
/* @var $this SiveoController */
/* @var $model Siveo */

$this->breadcrumbs=array(
	'Siveos'=>array('index'),
	$model->REGISTRO=>array('view','id'=>$model->REGISTRO),
	'Update',
);

$this->menu=array(
	array('label'=>'List Siveo', 'url'=>array('index')),
	array('label'=>'Create Siveo', 'url'=>array('create')),
	array('label'=>'View Siveo', 'url'=>array('view', 'id'=>$model->REGISTRO)),
	array('label'=>'Manage Siveo', 'url'=>array('admin')),
);
?>

<h1>Update Siveo <?php echo $model->REGISTRO; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>