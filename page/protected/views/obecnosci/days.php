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

<h1><strong>Obecności z dnia <?php echo $_GET['dzien']; ?></strong></h1>

<table class="table my_table table-bordered table-condensed table-responsive">
    <thead>
        <th>ID</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Obecny</th>
        <th style="width: 50px;"></th>
    </thead>
<?php
    foreach($dataReader as $row)    {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['imie']."</td>";
        echo "<td>".$row['nazwisko']."</td>";
        if(!isset($row['obecny'])) $row['obecny'] = '-';
        if($row['obecny'] == '-') echo "<td class='danger my_present'>".$row['obecny'];
        else echo "<td class='active my_present'>".$row['obecny'];
        echo "</td>";
        echo "<td>";
        echo "<form method='post' action='index.php?r=obecnosci/update'><input type='hidden' value=".$row['obecny']." name='obecny'>
                <input type='hidden' value=".$_GET['dzien']." name='dzien'>
                <input type='hidden' value=".$row['id']." name='id'>
                <input type='hidden' value=".$row['id_obecnosci']." name='id_obecnosci'>
                <button type='submit' class='btn btn-warning btn-sm'>Change</form>";
        echo "</td>";
        echo "</tr>";
    }
?>

</table>
