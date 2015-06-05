<?php
/* @var $this PropietarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Propietarios',
);

$this->menu=array(
	array('label'=>'Create Propietario', 'url'=>array('create')),
	array('label'=>'Manage Propietario', 'url'=>array('admin')),
);
?>

<h1>Propietarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
