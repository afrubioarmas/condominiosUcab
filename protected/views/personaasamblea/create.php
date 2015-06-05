<?php
/* @var $this PersonaasambleaController */
/* @var $model Personaasamblea */

$this->breadcrumbs=array(
	'Personaasambleas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Personaasamblea', 'url'=>array('index')),
	array('label'=>'Manage Personaasamblea', 'url'=>array('admin')),
);
?>

<h1>Create Personaasamblea</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>