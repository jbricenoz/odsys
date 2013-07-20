<?php
/* @var $this PlaController */
/* @var $model Pla */

$this->breadcrumbs=array(
	'Plaza'=>array('index'),
	$model->PLA,
);

$this->menu=array(
	array('label'=>'Listar Plazas', 'url'=>array('index')),
	array('label'=>'Nueva Plaza', 'url'=>array('create')),
	array('label'=>'Actualizar Plaza', 'url'=>array('update', 'id'=>$model->PLA)),
	array('label'=>'Eliminar Plaza', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PLA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Plaza : <?php echo $model->PLA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PLA',
		array( 'name'=>'COD','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->cED->NOM),
                        array('pers/view','id'=>$model->cED->CED)),),
		array( 'name'=>'COD','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->cOD->DES),
                        array('up/view','id'=>$model->cOD->COD)),),
		array( 'name'=>'CODT','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->cODT->DES),
		                  array('tipos/view','id'=>$model->cODT->CODT)),),
               'FEI',
                
	),
)); ?>
