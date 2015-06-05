<?php
/* @var $this PagosprogramadosController */
/* @var $model Pagosprogramados */

$this->breadcrumbs=array(
	'Pagosprogramadoses'=>array('index'),
	$model->idPagosProgramados=>array('view','id'=>$model->idPagosProgramados),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pagosprogramados', 'url'=>array('index')),
	array('label'=>'Create Pagosprogramados', 'url'=>array('create')),
	array('label'=>'View Pagosprogramados', 'url'=>array('view', 'id'=>$model->idPagosProgramados)),
	array('label'=>'Manage Pagosprogramados', 'url'=>array('admin')),
);
?>

<h1>Update Pagosprogramados <?php echo $model->idPagosProgramados; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'edificios'=>$edificios)); ?>