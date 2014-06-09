<?php
/* @var $this UczenController */
/* @var $model Uczen */

$this->breadcrumbs=array(
	'Uczniowie'=>array('index'),
	'Dodaj',
);

$this->menu=array(
	array('label'=>'Lista uczniów', 'url'=>array('index')),
	array('label'=>'Zarządzaj uczniami', 'url'=>array('admin')),
);
?>

<h1>Dodaj ucznia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>