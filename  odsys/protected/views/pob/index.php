<?php
/* @var $this PobController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Población',
);

$this->menu=array(
	array('label'=>'Registrar Población', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Población de la región</h1>

<?php /*$this->widget('zii.widgets.CListView', array(
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
                        'name'=>'REGISTRO',
			'type' => 'raw',
			'value' => 'CHtml::link(CHtml::encode($data->REGISTRO),array("view","id"=>$data->REGISTRO));'
		),
		
		 array(
                        'name'=>'COD',
			'type' => 'raw',
			'value' => 'CHtml::link(CHtml::encode($data->cOD->DES),array("up/view","id"=>$data->COD));'
		),
		'GRU',
		'HOM',
		'MUJ',
		'ANO',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>