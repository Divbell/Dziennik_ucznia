<?php
/* @var $this UczenController */
/* @var $model Uczen */

$this->breadcrumbs=array(
	'Uczens'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Uczen', 'url'=>array('index')),
	array('label'=>'Create Uczen', 'url'=>array('create')),
	array('label'=>'Update Uczen', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Uczen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Uczen', 'url'=>array('admin')),
);
?>

<h1>View Uczen #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'imie',
		'nazwisko',
		'pesel',
		'miejscowosc',
		'ulica',
	),
)); ?>
