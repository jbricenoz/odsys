<?php
/* @var $this SiveoController */
/* @var $model Siveo */

$this->breadcrumbs=array(
	'Siveos'=>array('index'),
	'Buscar',
);

$this->menu=array(
	array('label'=>'Listar Siveo', 'url'=>array('index')),
	array('label'=>'Registrar Siveo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#siveo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Siveos</h1>

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
	'id'=>'siveo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'REGISTRO',
		'FECHA',
		array('name'=>'CODT','value'=>'$data->cODT->DES','type'=>'text',),
		'GRUPO',
		'VALOR',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
