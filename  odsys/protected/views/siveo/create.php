<?php
/* @var $this SiveoController */
/* @var $model Siveo */

$this->breadcrumbs=array(
	'Siveos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Siveo', 'url'=>array('index')),
	array('label'=>'Manage Siveo', 'url'=>array('admin')),
);
?>

<h1>Create Siveo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>