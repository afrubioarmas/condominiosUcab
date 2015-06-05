<?php
/* @var $this JuntacondominioController */
/* @var $model Juntacondominio */

$this->breadcrumbs=array(
	'Juntacondominios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Juntacondominio', 'url'=>array('index')),
	array('label'=>'Manage Juntacondominio', 'url'=>array('admin')),
);
?>

<h1>Create Juntacondominio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>