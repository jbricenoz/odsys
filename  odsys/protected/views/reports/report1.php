<?php 
if($idCod != 0){
$this->menu=array(
		array('label'=>'Generar PDF', 'url'=>array('pdf','idCodt'=>$idCod,'fecha'=>$fecha)),
		array('label'=>'Generar Excel', 'url'=>array('excel','idCodt'=>$idCod,'fecha'=>$fecha)),
//                 array('label'=>'Volver al menu', 'url'=>array('site/menu')),
              
//         array('label'=>'Generar PDF 2', 'url'=>array('cons/index?pdf=1')),
// 	array('label'=>'Generar Excel 2', 'url'=>array('cons/index?xls=1')),
);
}
?>
<?php $this->pageTitle=Yii::app()->name; ?>
<h1><?php echo CHtml::encode(Yii::app()->name); ?> Consultas de las unidades programaticas</h1>
<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'cons-form',
			'enableAjaxValidation'=>FALSE,
)); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'COD'); ?>
		<?php echo $form->dropDownList($model,'COD', CHtml::listData(Up::model()->findAll(array('condition'=>'REGION="CHOROTEGA"')), 'COD', 'DES'),array('empty' => ' Seleccione la U.P.','value'=>0)); ?>
		<?php echo $form->error($model,'COD'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'FECHA'); ?>
                <?php
                /*
                 * Esta funcion llama al componente zii.widgets.jui.CJuiDatePicker
                 * Que depliega un calendario en la interface de usuario
                 */
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'language'=>'es',
                    'model'=>$model,'value'=>$model->FECHA,
                    'attribute'=>'FECHA','flat'=>false,  
                    'options'=>array('buttonImageOnly'=> true,'constrainInput'=>true,'constrainInput'=>true,
                        'showAnim'=>'slideDown','showButtonPanel'=>'true','mode'=>'focus','dateFormat'=>'yy-mm-dd',
                    ),));
                ?>
		<?php // echo $form->textField($model,'FECHA');?>
		<?php echo $form->error($model,'FECHA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Ver Reporte'); ?>
	</div>

	<div>
		<?php echo $idCod; $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'report-grid',
				'dataProvider'=>$model->getReportOne($idCod,$fecha),
				'columns'=>array(
		'D',
        'C',
		'A',
		'P',
		'TOTAL',
	),
)); ?>
	</div>

	<div>
		<?php 
	 if($excel != 0){
	 $this->widget('application.extensions.EExcelView', array(
     'dataProvider'=>$model->getReportOne($idCod,$fecha),
     'grid_mode'=>'export',
     'title'=>'Reporte1',
     'exportType'=>'Excel2007',
     'autoWidth'=>false,
	 'columns'=>array(
		'D',
		'C',
		'A',
		'P',
		'TOTAL',
	  ),
));}
?>

	</div>
	
		<div>
		<?php 
	 if($pdf != 0){
	 $this->widget('application.extensions.EExcelView', array(
     'dataProvider'=>$model->getReportOne($idCod,$fecha),
     'grid_mode'=>'export',
     'title'=>'Reporte1',
     'exportType'=>'PDF',
     'autoWidth'=>false,
	 'columns'=>array(
		'D',
		'C',
		'A',
		'P',
		'TOTAL',
	  ),
));}
?>

	</div>

	<?php $this->endWidget(); ?>

</div>
<!-- form -->
