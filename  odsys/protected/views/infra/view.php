<?php
/* @var $this InfraController */
/* @var $model Infra */

$this->breadcrumbs=array(
	'Infraestructura de servicios'=>array('index'),
	$model->Registro,
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Nuevo registro', 'url'=>array('create')),
	array('label'=>'Actualizar registro', 'url'=>array('update', 'id'=>$model->Registro)),
	array('label'=>'Eliminar registro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Registro),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Buscar registro', 'url'=>array('admin')),
);
?>

<h1>Infraestructura de servico #  <?php echo $model->Registro; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'Registro',
		'FECHA',
		array( 'name'=>'COD','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->cOD->DES),
                        array('up/view','id'=>$model->cOD->COD)),),
		array( 'name'=>'CODT','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->cODT->DES),
		                  array('tipos/view','id'=>$model->cODT->CODT)),),
               'ESTADO',
	),
)); ?>
