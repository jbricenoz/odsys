<?php
/* @var $this JefeUPController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jefes de Unidad Programatica',
);

$this->menu=array(
	array('label'=>'Nuevo Jefe U.P.', 'url'=>array('create')),
	array('label'=>'Buscar registro', 'url'=>array('admin')),
);
?>

<h1>Jefe U.P.</h1>

<?php 
/*
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
 * 
 */
?>
 

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'upje-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
                
               array(
                        'name'=>'Detalle',
			'type' => 'raw',
			'value' => 'CHtml::link(CHtml::encode("Ver"),array("view","id"=>$data->CED));'
		),
               array(
                        'name'=>'CED',
			'type' => 'raw',
			'value' => 'CHtml::link(CHtml::encode($data->cED->NOM),array("pers/view","id"=>$data->CED));'
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
	),
)); ?>