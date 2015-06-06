<?php
/* @var $this ActareunionController */
/* @var $model Actareunion */

$this->breadcrumbs=array(
	'Actareunions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Actareunion', 'url'=>array('index')),
	array('label'=>'Manage Actareunion', 'url'=>array('admin')),
);
?>

<h1>Create Actareunion</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'edificios'=>$edificios,'oficinas'=>$oficinas,'trabajadoresempresa'=>$trabajadoresempresa)); ?>