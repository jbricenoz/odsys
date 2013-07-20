<?php
/* @var $this PobController */
/* @var $model Pob */

$this->breadcrumbs=array(
	'Población'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Población', 'url'=>array('index')),
	array('label'=>'Registrar Población', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pob-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar población</h1>

<p>
Si lo desea, puede introducir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>)al comienzo de cada uno de los valores de su búsqueda para especificar cómo la comparación se debe hacer.
</p>

<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pob-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'REGISTRO',
		 array('name'=>'COD','value'=>'$data->cOD->DES','type'=>'text',),
		'GRU',
		'HOM',
		'MUJ',
		'ANO',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
