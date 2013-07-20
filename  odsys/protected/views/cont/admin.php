<?php
/* @var $this ContController */
/* @var $model Cont */

$this->breadcrumbs=array(
	'Contratos'=>array('index'),
	'Buscar registros',
);

$this->menu=array(
	 array('label'=>'Listar registros', 'url'=>array('index')),
	 array('label'=>'Nuevo registro', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cont-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Buscar contratos</h1>

<p>
Opcionalmente puede ingresar un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al principio de cada uno de sus valores de búsqueda para especificar cómo debe hacerse la comparación.
</p>

<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cont-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'PLA',
		'HCONTRATADAS',
		'HCONSULTA',
		'HADMINISTRATIVAS',
		'HPROMOCION',
		/*
		'HTRASLADO',
		'HCAPACITACION',
		'HACTACADEMICAS',
		'HOTROS',
		'OBSERVACIONES',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
