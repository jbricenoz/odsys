<?php
/* @var $this PermController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Permisos',
);

$this->menu=array(
	array('label'=>'Registrar permiso', 'url'=>array('create')),
	array('label'=>'Buscar registro', 'url'=>array('admin')),
);
?>

<h1>Permisos</h1>

<?php /*
 * $this->widget('zii.widgets.CListView', array(

	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));
 *  */ ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'perm-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(

               array(
                        'name'=>'Detalle',
			'type' => 'raw',
			'value' => 'CHtml::link(CHtml::encode("Ver"),array("view","id"=>$data->REGISTRO));'
		),
             	'FECHA',
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
		'ESTADO',
		'CODRAYOSX',
		'ESTADORAYOSX',
	),
)); ?>