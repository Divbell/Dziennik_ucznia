<?php
/* @var $this UczenController */
/* @var $model Uczen */

$this->breadcrumbs=array(
	'Uczens'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Uczen', 'url'=>array('index')),
	array('label'=>'Create Uczen', 'url'=>array('create')),
	array('label'=>'View Uczen', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Uczen', 'url'=>array('admin')),
);
?>

<h1>Update Uczen <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>