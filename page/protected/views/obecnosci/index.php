<?php
/* @var $this ObecnosciController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Obecności wg. dni',
);

$this->menu=array(
	array('label'=>'Obecności wg. dni', 'url'=>array('index')),
	array('label'=>'Obecności wg. uczniów', 'url'=>array('students')),
);
?>

<h1><strong>Obecności - lista dni</strong></h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<ul>
<?php
foreach($dataReader as $row)    {
    echo "<hr><li class='my_days_list'>";
    echo "<b>".CHtml::link(CHtml::encode($row['dzien']), array('days','dzien'=>$row['dzien']))."</b>";
    echo "</li>";
}
?>
</ul>