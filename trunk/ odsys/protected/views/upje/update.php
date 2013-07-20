<?php
/* @var $this UpjeController */
/* @var $model Upje */

$this->breadcrumbs=array(
	'Upjes'=>array('index'),
	$model->CED=>array('view','id'=>$model->CED),
	'Update',
);

$this->menu=array(
	array('label'=>'List Upje', 'url'=>array('index')),
	array('label'=>'Create Upje', 'url'=>array('create')),
	array('label'=>'View Upje', 'url'=>array('view', 'id'=>$model->CED)),
	array('label'=>'Manage Upje', 'url'=>array('admin')),
);
?>

<h1>Update Upje <?php echo $model->CED; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>