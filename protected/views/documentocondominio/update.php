<?php
/* @var $this DocumentocondominioController */
/* @var $model Documentocondominio */

$this->breadcrumbs=array(
	'Documentocondominios'=>array('index'),
	$model->idDocumentoCondominio=>array('view','id'=>$model->idDocumentoCondominio),
	'Update',
);

$this->menu=array(
	array('label'=>'List Documentocondominio', 'url'=>array('index')),
	array('label'=>'Create Documentocondominio', 'url'=>array('create')),
	array('label'=>'View Documentocondominio', 'url'=>array('view', 'id'=>$model->idDocumentoCondominio)),
	array('label'=>'Manage Documentocondominio', 'url'=>array('admin')),
);
?>

<h1>Update Documentocondominio <?php echo $model->idDocumentoCondominio; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>