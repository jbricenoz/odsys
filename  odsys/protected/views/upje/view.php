<?php
/* @var $this UpjeController */
/* @var $model Upje */

$this->breadcrumbs=array(
	'Upjes'=>array('index'),
	$model->CED,
);

$this->menu=array(
	array('label'=>'List Upje', 'url'=>array('index')),
	array('label'=>'Create Upje', 'url'=>array('create')),
	array('label'=>'Update Upje', 'url'=>array('update', 'id'=>$model->CED)),
	array('label'=>'Delete Upje', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CED),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Upje', 'url'=>array('admin')),
);
?>

<h1>View Upje #<?php echo $model->CED; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CED',
		'COD',
		'CODT',
		'POB',
	),
)); ?>
