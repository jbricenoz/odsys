<?php
/* @var $this JefeUPController */
/* @var $model Upje */

$this->breadcrumbs=array(
	'Jefe de U:P'=>array('index'),
	$model->CED,
	//$modelUp->COD,
);

$this->menu=array(
	array('label'=>'Listar Jefe U.P.', 'url'=>array('index')),
	array('label'=>'Crear Jefe U.P.', 'url'=>array('create')),
	array('label'=>'Actualizar Jefe U.P.', 'url'=>array('update', 'id'=>$model->CED)),
	array('label'=>'Eliminar Jefe U.P.', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CED),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Jefe U.P.', 'url'=>array('admin')),
);
?>

<h1>Detalle Jefe UP <?php echo $model->CED; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        //'data'=>$modelUp,
	'attributes'=>array(
                array( 'name'=>'CED','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->cED->NOM),
		                  array('pers/view','id'=>$model->cED->CED)),),
		array( 'name'=>'CODT','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->cODT->DES),
		                  array('tipos/view','id'=>$model->cODT->CODT)),),
                array( 'name'=>'POB','type'=>'raw','value'=>$model->POB),
                array( 'name'=>'DES','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->cOD->DES),
		                  array('pers/view','id'=>$model->cOD->DES)),),
               
	),
)); ?>



	

