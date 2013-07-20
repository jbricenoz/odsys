<?php
/* @var $this SuprController */
/* @var $model Supr */

$this->breadcrumbs=array(
	'Supervición'=>array('index'),
	$model->REGISTRO,
);

$this->menu=array(
	array('label'=>'Listar Supervisiones', 'url'=>array('index')),
	array('label'=>'Nueva Supervisión', 'url'=>array('create')),
	array('label'=>'Actualizar Supervisión', 'url'=>array('update', 'id'=>$model->REGISTRO)),
	array('label'=>'Eliminar Supervisión', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->REGISTRO),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Ver supervisión #<?php echo $model->REGISTRO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'REGISTRO',
		'FECHA',
                 array( 'name'=>'COD','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->cOD->DES),
                        array('up/view','id'=>$model->cOD->COD)),),
		'HUA',
		'HUC',
		'HUCE',
		'HUPS',
		'HUT',
		'HUO',
		'HUAC',
	),
)); ?>
