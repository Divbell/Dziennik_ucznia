<?php
/* @var $this ObecnosciController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Obecności wg. uczniów',
);

$this->menu=array(
    array('label'=>'Obecności wg. dni', 'url'=>array('index')),
    array('label'=>'Obecności wg. uczniów', 'url'=>array('students')),
);
?>

<h1><strong>Obecności - lista uczniów</strong></h1>
<span class="my_students_list">
<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_students',
));
?>
</span>