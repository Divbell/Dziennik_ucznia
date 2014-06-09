<?php
/* @var $this UczenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Uczniowie',
);

$this->menu=array(
	array('label'=>'Dodaj ucznia', 'url'=>array('create')),
	array('label'=>'Zarządzaj uczniami', 'url'=>array('admin')),
);
?>

<h1>Uczniowie</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'uczen-grid',
	'dataProvider'=>$dataProvider,
	'itemsCssClass' => 'table my_table table-bordered table-hover table-condensed',
	'columns'=>array(
		'id',
		'imie',
		'nazwisko',
		'pesel',
		'miejscowosc',
		'ulica',
	),
	'htmlOptions' => array(
		'class' => 'my_table_div table-responsive'
	)
)); ?>
