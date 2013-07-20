<?php
/* @var $this TiposController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipologia del sistema',
);

$this->menu=array(
	array('label'=>'Nuevo tipo', 'url'=>array('create')),
	array('label'=>'Buscar tipo', 'url'=>array('admin')),
);
?>

<h1>Tipologia del sistema</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
