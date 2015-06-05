<?php
/* @var $this PersonaasambleaController */
/* @var $model Personaasamblea */

$this->breadcrumbs=array(
	'Personaasambleas'=>array('index'),
	$model->idPersonaAsamblea=>array('view','id'=>$model->idPersonaAsamblea),
	'Update',
);

$this->menu=array(
	array('label'=>'List Personaasamblea', 'url'=>array('index')),
	array('label'=>'Create Personaasamblea', 'url'=>array('create')),
	array('label'=>'View Personaasamblea', 'url'=>array('view', 'id'=>$model->idPersonaAsamblea)),
	array('label'=>'Manage Personaasamblea', 'url'=>array('admin')),
);
?>

<h1>Update Personaasamblea <?php echo $model->idPersonaAsamblea; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>