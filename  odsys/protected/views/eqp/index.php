<?php
/* @var $this EqpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Equipameinto',
);

$this->menu=array(
	array('label'=>'Registrar Equipo', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Equipamientos</h1>

<?php 
/*
 * 
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
*/
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'eqp-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
                 array(
                        'name'=>'PLACA',
			'type' => 'raw',
			'value' => 'CHtml::link(CHtml::encode($data->PLACA),array("view","id"=>$data->PLACA));'
		),
		 array(
                        'name'=>'COD',
			'type' => 'raw',
			'value' => 'CHtml::link(CHtml::encode($data->cOD->DES),array("up/view","id"=>$data->COD));'
		),
		  array(
                        'name'=>'CODT',
			'type' => 'raw',
			'value' => 'CHtml::link(CHtml::encode($data->cODT->DES),array("tipos/view","id"=>$data->CODT));'
		),
		'FECHAREG',
		'ESTADO',
	),
)); ?>