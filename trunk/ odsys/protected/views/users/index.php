<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Nuevo Usuario', 'url'=>array('create')),
	array('label'=>'Buscar Usuarios', 'url'=>array('admin')),
        array('label'=>'Nueva Tipologia', 'url'=>array('Tipos/create')),
        array('label'=>'Buscar Tipologia', 'url'=>array('Tipos/admin')),
);
?>

<h1>Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
