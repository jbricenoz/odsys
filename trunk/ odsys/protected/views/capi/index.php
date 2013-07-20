<?php
/* @var $this CapiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Capacidad Instalada',
);

$this->menu=array(
	array('label'=>'Registrar Capacidad', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Capacidad instalada de los servicios de odontologia</h1>

<?php /*
 * $this->widget('zii.widgets.CListView', array(

	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));  */
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'capi-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
                 array(
			'name' => 'Detalles',
			'type' => 'raw',
			'value' => 'CHtml::link(CHtml::encode($data->getAttributeLabel("Ver")),array("view","id"=>$data->REGISTRO));'
		),
		'FECHA',
                 array(
			'name' => 'COD',
			'type' => 'raw',
			'value' => 'CHtml::link(CHtml::encode($data->getAttributeLabel($data->cOD->DES)),array("up/view","id"=>$data->COD));'
		),
		'INSTALADA',
		'UTILIZADA',
		'APROVECHAMIENTO',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>