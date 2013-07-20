<?php
/* @var $this JefeUPController */
/* @var $model Upje */

$this->breadcrumbs=array(
	'Jefes de UP'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Jefe U.P.', 'url'=>array('index')),
	array('label'=>'Buscar Jefe U.P.', 'url'=>array('admin')),
);
?>

<h1>Crear Jefe U.P.</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>