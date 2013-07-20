<?php
/* @var $this InfraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Infraestructura de servicios odontologicos de la región',
);

$this->menu=array(
	array('label'=>'Nuevo Registro', 'url'=>array('create')),
	array('label'=>'Buscar Registro', 'url'=>array('admin')),
);
?>

<h1>Infraestructura de servicios odontologicos de la región</h1>

<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'infra-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
            
		'Registro',
		'FECHA',
		'CODT',
		'COD',
		'ESTADO',
            array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

