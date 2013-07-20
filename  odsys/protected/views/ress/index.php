<?php
/* @var $this RessController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Referencias de servicios de salud',
);

$this->menu=array(
	array('label'=>'Registrar Referencia', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Referencias de servicio de salud</h1>

<?php /*
 * $this->widget('zii.widgets.CListView', array(
 
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
                        'name'=>'Registro',
			'type' => 'raw',
			'value' => 'CHtml::link(CHtml::encode($data->Registro),array("view","id"=>$data->Registro));'
		),
		'FECHA',
		array(
                        'name'=>'COD',
			'type' => 'raw',
			'value' => 'CHtml::link(CHtml::encode($data->cOD->DES),array("up/view","id"=>$data->COD));'
		),
		'R1',
		'R2',
		'R3',
		/*
		'APROV',
		*/
	),
)); ?>