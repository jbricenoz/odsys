<?php
/* @var $this InfraController */
/* @var $model Infra */

$this->breadcrumbs=array(
	'Infras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Infra', 'url'=>array('index')),
	array('label'=>'Manage Infra', 'url'=>array('admin')),
);
?>

<h1>Create Infra</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>