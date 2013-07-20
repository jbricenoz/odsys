<?php
/* @var $this ContController */
/* @var $model Cont */

$this->breadcrumbs=array(
	'Contratos'=>array('index'),
	$model->PLA,
);

$this->menu=array(
        
        array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Nuevo registro', 'url'=>array('create')),
	array('label'=>'Ver registros', 'url'=>array('view', 'id'=>$model->PLA)),
	array('label'=>'Buscar registros', 'url'=>array('admin')),
	array('label'=>'Eliminar registro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PLA),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Cont #<?php echo $model->PLA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PLA',
		'HCONTRATADAS',
		'HCONSULTA',
		'HADMINISTRATIVAS',
		'HPROMOCION',
		'HTRASLADO',
		'HCAPACITACION',
		'HACTACADEMICAS',
		'HOTROS',
		'OBSERVACIONES',
	),
)); ?>
