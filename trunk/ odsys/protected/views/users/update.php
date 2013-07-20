<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->CODUSER=>array('view','id'=>$model->CODUSER),
	'Update',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'View Users', 'url'=>array('view', 'id'=>$model->CODUSER)),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>Update Users <?php echo $model->CODUSER; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>