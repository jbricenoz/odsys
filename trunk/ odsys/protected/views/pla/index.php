<?php
/* @var $this PlaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Plaza',
);

$this->menu=array(
	array('label'=>'Nueva Plaza', 'url'=>array('create')),
        array('label'=>'Buscar Contrato', 'url'=>array('Cont/admin')),
	array('label'=>'Buscar Plaza', 'url'=>array('admin')),
);
?>

<h1>Recurso humano disponible</h1>

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
	'id'=>'pla-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
              array(
                        'name'=>'Ver',
			'type' => 'raw',
			'value' => 'CHtml::link(CHtml::encode("Ver"),array("view","id"=>$data->PLA));'
		),
                array(
                        'name'=>'PLA',
			'type' => 'raw',
			'value' => 'CHtml::link(CHtml::encode($data->PLA),array("cont/view","id"=>$data->PLA));'
		),
	       array(
                        'name'=>'CED',
			'type' => 'raw',
			'value' => 'CHtml::link(CHtml::encode($data->cED->CED),array("pers/view","id"=>$data->CED));'
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
		'FEI',
	),
)); ?>
