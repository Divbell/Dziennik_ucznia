<?php
/* @var $this UczenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Uczens',
);

$this->menu=array(
	array('label'=>'Create Uczen', 'url'=>array('create')),
	array('label'=>'Manage Uczen', 'url'=>array('admin')),
);
?>

<h1>Uczens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
