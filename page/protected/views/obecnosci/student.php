<?php
/* @var $this ObecnosciController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Obecności',
);

$this->menu=array(
    array('label'=>'Obecności wg. dni', 'url'=>array('index')),
    array('label'=>'Obecności wg. uczniów', 'url'=>array('students')),
);
?>

<h1><strong>Obecności ucznia </strong></h1>
<?php
    foreach($dataReader as $row)    {
        echo "<ul> <hr> <li>";
        echo "<b>".CHtml::link(CHtml::encode($row['dzien']), array('days','dzien'=>$row['dzien']))."</b>";
        echo "</li></ul>";
    }
?>
