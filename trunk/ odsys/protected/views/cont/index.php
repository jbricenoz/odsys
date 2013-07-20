<?php
/* @var $this ContController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contratos',
);

$this->menu=array(
	array('label'=>'Registrar horas', 'url'=>array('create')),
	array('label'=>'Buscar registro', 'url'=>array('admin')),
);
?>

<h1>Horas Contratadas</h1>

<?php
/*
 * $this->widget('zii.widgets.CListView', array(
 
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));
 * 
 */  
 ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cont-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'PLA',
		'HCONTRATADAS',
                'OBSERVACIONES',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>