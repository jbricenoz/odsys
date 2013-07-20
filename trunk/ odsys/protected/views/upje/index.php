<?php
/* @var $this UpjeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Upjes',
);

$this->menu=array(
	array('label'=>'Create Upje', 'url'=>array('create')),
	array('label'=>'Manage Upje', 'url'=>array('admin')),
);
?>

<h1>Upjes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
