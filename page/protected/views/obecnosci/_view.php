<?php
/* @var $this ObecnosciController */
/* @var $data Obecnosci */

?>

<div class="my_view">
	<?php
        echo CHtml::link(CHtml::encode($data->dzien), array('days','dzien'=>$data->dzien));
    ?>
    <hr>
</div>