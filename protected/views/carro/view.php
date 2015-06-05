<?php
/* @var $this CarroController */
/* @var $model Carro */

$this->breadcrumbs=array(
	'Carros'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Carro', 'url'=>array('index')),
	array('label'=>'Create Carro', 'url'=>array('create')),
	array('label'=>'Update Carro', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Carro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Carro', 'url'=>array('admin')),
);
?>

<h1>View Carro #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'modelo',
		'color',
		'dueno',
	),
)); ?>
El dueño es:
<?php $carro=Carro::model()->findByPk($model->id);echo $carro->dueno0->nombre; ?>