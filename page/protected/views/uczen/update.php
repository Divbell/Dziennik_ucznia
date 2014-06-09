<?php
/* @var $this UczenController */
/* @var $model Uczen */

$this->breadcrumbs=array(
	'Uczniowie'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista uczniów', 'url'=>array('index')),
	array('label'=>'Dodaj ucznia', 'url'=>array('create')),
	array('label'=>'Przegląd uczniów', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Zarządzaj uczniami', 'url'=>array('admin')),
);
?>

<h1>Zaaktualizuj ucznia <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>