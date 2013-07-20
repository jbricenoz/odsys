<?php
/* @var $this ConsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Consultas por UP',
);

$this->menu=array(
	array('label'=>'Nuevo registro', 'url'=>array('create')),
	array('label'=>'Buscar Registro', 'url'=>array('admin')),
);
?>

<h1>Registro de consultas por UP </h1>

<?php
//
// $this->widget('zii.widgets.CListView', array(
//
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//)); 
?>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pla-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
                array(
                        'name'=>'Registro',
			'type' => 'raw',
                        'value' => 'CHtml::link(CHtml::encode("Ver detalles"), array("view", "id"=>$data->Registro));',
		),
                array(
                        'name'=>'FECHA',
			'type' => 'raw',
			'value' => 'CHtml::encode($data->FECHA);'
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
<?php 
        $this->widget('chartjs.widgets.ChBars', 
            array(
                'width' => 900,
                'height' => 400,
                'htmlOptions' => array(),
                'labels' => array("January","February","March","April","May","June","July","August","September","October","November","Dicember"),
                'datasets' => array(
                    array(
                        "fillColor" => "#001d7e",
                        "strokeColor" => "rgba(220,220,220,1)",
                        "data" => array(10, 20, 30, 40, 50, 60,90,20,30,90,80,20)
                    )       
                ),
                'options' => array("value")
            )
        ); 
             
        
        
    ?>

<?php 
$this->Widget('ext.highcharts.HighchartsWidget', array(
   'options'=>array(
      'title' => array('text' => 'Consultas generales'),
      'xAxis' => array(
         'categories' => array('1 ves al año', 'Consecutivas', 'Promocion')
      ),
      'yAxis' => array(
         'title' => array('text' => 'Fruit eaten')
      ),
      'series' => array(
         array('name' => 'Jane', 'data' => array(1, 0, 4)),
         array('name' => 'John', 'data' => array(5, 7, 3))
      )
   )
));
//
//$this->Widget('ext.highcharts.HighchartsWidget', array(
//   'options'=>'{
//      "title": { "text": "Fruit Consumption" },
//      "xAxis": {
//         "categories": ["Apples", "Bananas", "Oranges"]
//      },
//      "yAxis": {
//         "title": { "text": "Fruit eaten" }
//      },
//      "series": [
//         { "name": "Jane", "data": [1, 0, 4] },
//         { "name": "John", "data": [5, 7,3] }
//      ]
//   }'
//));


?>


