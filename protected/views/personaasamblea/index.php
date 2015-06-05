<?php
/* @var $this PersonaasambleaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Personaasambleas',
);

$this->menu=array(
	array('label'=>'Create Personaasamblea', 'url'=>array('create')),
	array('label'=>'Manage Personaasamblea', 'url'=>array('admin')),
);
?>

<h1>Personaasambleas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
