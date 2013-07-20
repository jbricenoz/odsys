<?php
/* @var $this PersController */
/* @var $model Pers */

$this->breadcrumbs=array(
	'Persona'=>array('index'),
	$model->CED,
);

$this->menu=array(
	array('label'=>'Lista de Persona', 'url'=>array('index')),
	array('label'=>'Nueva Persona', 'url'=>array('create')),
	array('label'=>'Actualizar Persona', 'url'=>array('update', 'id'=>$model->CED)),
	array('label'=>'Eliminar Persona', 'url'=>'#', 'linkOptions'=>array('submit'=>array('Borrar','id'=>$model->CED),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Detalles de persona | Ced = <?php echo $model->CED; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CED',
		'NOM',
		'TEL',
		'EMA',
               /* array( 'name'=>'PLA','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->plas->CODT),
		                  array('pla/view','id'=>$model->plas->COD)),),*/
	),
)); ?>
