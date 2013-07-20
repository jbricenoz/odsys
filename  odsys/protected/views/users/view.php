<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->CODUSER,
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Nuevo Usuario', 'url'=>array('create')),
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->CODUSER)),
	array('label'=>'Eliminar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CODUSER),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Buscar Usuario', 'url'=>array('admin')),
        array('label'=>'Volver a ajustes', 'url'=>array('index')),
);
?>

<h1>View Users #<?php echo $model->CODUSER; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CODUSER',
		'CED',
		'username',
		'password',
		'session',
		'role',
	),
)); ?>
