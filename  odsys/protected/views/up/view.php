<?php
/* @var $this UpController */
/* @var $model Up */

$this->breadcrumbs=array(
	'Unidad Programatica'=>array('index'),
	$model->COD,
);

$this->menu=array(
	array('label'=>'Listar Up', 'url'=>array('index')),
	array('label'=>'Nueva Up', 'url'=>array('create')),
	array('label'=>'Actualizar Up', 'url'=>array('update', 'id'=>$model->COD)),
	array('label'=>'Eliminar Up', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->COD),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Unidad Programatica #<?php echo $model->COD; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
                'COD',
		'DES',
	),
)); ?>
