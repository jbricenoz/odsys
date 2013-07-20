<?php
/* @var $this RessController */
/* @var $model Ress */

$this->breadcrumbs=array(
	'Referencia a servicios de salud'=>array('index'),
	$model->Registro,
);

$this->menu=array(
	array('label'=>'Listar Referencias', 'url'=>array('index')),
	array('label'=>'Nueva Referencia', 'url'=>array('create')),
	array('label'=>'Actualizar Referencia', 'url'=>array('update', 'id'=>$model->Registro)),
	array('label'=>'Eliminar Referencia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Registro),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Ver referencia#<?php echo $model->Registro; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
                'Registro',
		'FECHA',
		array( 'name'=>'COD','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->cOD->DES),
                        array('up/view','id'=>$model->cOD->COD)),),
		'TOTAL',
		'R1',
		'R2',
		'R3',
		'APROV',
	),
)); ?>
