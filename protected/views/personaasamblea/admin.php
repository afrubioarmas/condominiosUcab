<?php
/* @var $this PersonaasambleaController */
/* @var $model Personaasamblea */

$this->breadcrumbs=array(
	'Personaasambleas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Personaasamblea', 'url'=>array('index')),
	array('label'=>'Create Personaasamblea', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#personaasamblea-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Personaasambleas</h1>

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
	'id'=>'personaasamblea-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idPersonaAsamblea',
		'Aprobacion',
		'Asistencia',
		'AsambleaExtraordinaria_idAsambleaExtraordinaria',
		'AsambleaOrdinaria_idAsambleaOrdinaria',
		'Propietario_Cedula',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
