<?php
/* @var $this DocumentocondominioController */
/* @var $model Documentocondominio */

$this->breadcrumbs=array(
	'Documentocondominios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Documentocondominio', 'url'=>array('index')),
	array('label'=>'Create Documentocondominio', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#documentocondominio-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Documentocondominios</h1>

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
	'id'=>'documentocondominio-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idDocumentoCondominio',
		'Cargo',
		'CedulaSuplente',
		'FechaInicio',
		'FechaFin',
		'Propietario_Cedula',
		/*
		'JuntaCondominio_idJuntaCondominio',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
