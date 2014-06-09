<?php
/* @var $this UczenController */
/* @var $model Uczen */

$this->breadcrumbs=array(
	'Uczen'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista uczniów', 'url'=>array('index')),
	array('label'=>'Dodaj ucznia', 'url'=>array('create')),
	array('label'=>'Zaaktualizuj ucznia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Usuń ucznia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Zarządzaj uczniami', 'url'=>array('admin')),
);
?>

<h1>Przegląd ucznia #<?php echo $model->id; ?></h1>

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
