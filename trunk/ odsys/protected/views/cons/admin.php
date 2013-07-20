<?php
/* @var $this ConsController */
/* @var $model Cons */

$this->breadcrumbs=array(
	'Consultas por UP'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Nuevo registro', 'url'=>array('create')),
        array('label'=>'Generar PDF', 'url'=>array('PDF'), 'linkOptions'=>array('target'=>'_blank')),
        array('label'=>'Generar  un reporte excel', 'url'=>array('cons/Excel?xls=1')),
        array('label'=>'Exportar todos los datos a Excel', 'url'=>array('cons/index?xls=1')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cons-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar los registros de consultas</h1>

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

<?php   $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cons-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		/*'Registro',*/
		'FECHA',
                'cOD.DES'=>array('name'=>'CODU','value'=>'$data->cOD->DES','type'=>'text',),
		'cODT.DES'=>array('name'=>'CONS','value'=>'$data->cODT->DES','type'=>'text',),
		/*'C1VESALANO',
		'CSUBSECUENTE',
		
		'APREVENTIVA',
		'ACURATIVA',
		'PROMHORAS',
		'PROMACTIV',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
