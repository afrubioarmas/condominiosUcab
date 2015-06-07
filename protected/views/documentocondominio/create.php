<?php
/* @var $this DocumentocondominioController */
/* @var $model Documentocondominio */

$this->breadcrumbs=array(
	'Documentocondominios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Documentocondominio', 'url'=>array('index')),
	array('label'=>'Manage Documentocondominio', 'url'=>array('admin')),
);
?>

<h1>Create Documentocondominio</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'juntascondominioEdificio'=>$juntascondominioEdificio,'propietarios'=>$propietarios)); ?>