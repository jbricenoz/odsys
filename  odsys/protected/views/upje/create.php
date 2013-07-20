<?php
/* @var $this UpjeController */
/* @var $model Upje */

$this->breadcrumbs=array(
	'Upjes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Upje', 'url'=>array('index')),
	array('label'=>'Manage Upje', 'url'=>array('admin')),
);
?>

<h1>Create Upje</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>