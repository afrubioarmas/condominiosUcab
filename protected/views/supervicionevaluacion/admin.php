<?php
/* @var $this SupervicionevaluacionController */
/* @var $model Supervicionevaluacion */

$this->breadcrumbs=array(
	'Supervicionevaluacions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Supervicionevaluacion', 'url'=>array('index')),
	array('label'=>'Create Supervicionevaluacion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#supervicionevaluacion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Supervicionevaluacions</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'supervicionevaluacion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idSupervicionEvaluacion',
		'Nota',
		'Descripcion',
		'Fecha',
		'TrabajadorEdificio_Cedula',
		'TrabajadorEmpresa_Cedula',
		/*
		'TrabajadorEmpresa_Oficina_idOficina',
		'TrabajadorEmpresa_Oficina_Empresa_RIF',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
