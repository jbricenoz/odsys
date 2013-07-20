<?php
/* @var $this UpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Unidad Programatica',
);

$this->menu=array(
	array('label'=>'Nueva Unidad Programatica', 'url'=>array('create')),
	array('label'=>'Buscar Unidad Programatica', 'url'=>array('admin')),
	array('label'=>'Jefes Unidad Programatica', 'url'=>array('JefeUP/index')),
);
?>

<h1>Unidades Programaticas</h1>

<?php
/*
 * 
 *  $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */
?>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'up-grid',
	'dataProvider'=>$dataProvider,
        
	'columns'=>array(
		'COD',
		'DES',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>