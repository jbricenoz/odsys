<?php
/* @var $this PobController */
/* @var $model Pob */

$this->breadcrumbs=array(
	'Poblacion'=>array('index'),
	$model->REGISTRO,
);

$this->menu=array(
	array('label'=>'Listar Poblaciones', 'url'=>array('index')),
	array('label'=>'Registrar Población', 'url'=>array('create')),
	array('label'=>'Actualizar registro', 'url'=>array('update', 'id'=>$model->REGISTRO)),
	array('label'=>'Eliminar Poblacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->REGISTRO),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Ver  población # <?php echo $model->REGISTRO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'REGISTRO',
		array('name'=>'COD','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->cOD->DES),
                array('up/view','id'=>$model->cOD->COD)),),
		'GRU',
		'HOM',
		'MUJ',
		'ANO',
	),
));?>
