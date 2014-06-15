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
    echo "<b>".CHtml::link(CHtml::encode($row['dzien']), array('days','dzien'=>$row['dzien'])).
              "<form method='post' action='index.php?r=obecnosci/delete' class='my_delete_form pull-right'><input type='hidden' value=".$row['dzien']." name='dzien'>
               <button type='submit' class='btn btn-danger btn-sm my_delete_button'>Usuń</button></form>"."</b>";
    echo "</li>";
}
?>
</ul>