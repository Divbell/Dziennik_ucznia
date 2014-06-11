<ul>
    <hr>
    <li>
        <b><?php echo CHtml::link(CHtml::encode($data->imie." ".$data->nazwisko), array('student','student'=>$data->id)); ?></b>
    </li>
</ul>