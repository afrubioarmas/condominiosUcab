<?php
/* @var $this PropietarioController */
/* @var $model Propietario */

$this->breadcrumbs=array(
	'Propietarios'=>array('index'),
	$model->Cedula,
);

$this->menu=array(
	array('label'=>'List Propietario', 'url'=>array('index')),
	array('label'=>'Create Propietario', 'url'=>array('create')),
	array('label'=>'Update Propietario', 'url'=>array('update', 'id'=>$model->Cedula)),
	array('label'=>'Delete Propietario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Cedula),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Propietario', 'url'=>array('admin')),
);
?>

<h1>View Propietario #<?php echo $model->Cedula; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Cedula',
		'Nombre',
		'Apellido',
		'ClaveLogueo',
	),
)); ?>

<br><br><br><br>
<input type="button" onclick="location.href='<?php echo Yii::app()->getBaseUrl(); ?>/propietario/generarresumen/<?php echo $model->Cedula ?>'" value='ver pdf de pago becerra'>


