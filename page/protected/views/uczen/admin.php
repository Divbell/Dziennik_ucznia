<?php
/* @var $this UczenController */
/* @var $model Uczen */

$this->breadcrumbs=array(
	'Uczniowie'=>array('index'),
	'Zarządzaj',
);

$this->menu=array(
	array('label'=>'Lista uczniów', 'url'=>array('index')),
	array('label'=>'Dodaj ucznia', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#uczen-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Zarządzaj uczniami</h1>

<?php echo CHtml::link('Zaawansowane wyszukiwanie','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'uczen-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass' => 'table my_table table-bordered table-hover table-condensed',
	'columns'=>array(
		'id',
		'imie',
		'nazwisko',
		'pesel',
		'miejscowosc',
		'ulica',
		array(
			'class'=>'CButtonColumn',
		),
	),
	'htmlOptions' => array(
	)
)); ?>
