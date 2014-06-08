<?php
/* @var $this UczenController */
/* @var $model Uczen */

$this->breadcrumbs=array(
	'Uczens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Uczen', 'url'=>array('index')),
	array('label'=>'Manage Uczen', 'url'=>array('admin')),
);
?>

<h1>Create Uczen</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>