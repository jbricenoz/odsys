<?php
/* @var $this ConsController */
/* @var $model Cons */

$this->breadcrumbs=array(
	'Consultas por UP'=>array('index'),
	$model->Registro,
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Nuevo registro', 'url'=>array('create')),
	array('label'=>'Actualizar registro', 'url'=>array('update', 'id'=>$model->Registro)),
	//array('label'=>'Eliminar Registro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Registro),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Registro de consulta #<?php echo $model->Registro; ?></h1>

<?php 
//print_r($model->Registro);

?>



<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Registro',
		'FECHA',
		array( 'name'=>'COD','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->cOD->DES),
                        array('up/view','id'=>$model->cOD->COD)),),
		array( 'name'=>'CODT','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->cODT->DES),
		                  array('tipos/view','id'=>$model->cODT->CODT)),),
		'C1VESALANO',
		'CSUBSECUENTE',
		'APREVENTIVA',
		'ACURATIVA',
		'PROMHORAS',
		'PROMACTIV',
	),
)); ?>
