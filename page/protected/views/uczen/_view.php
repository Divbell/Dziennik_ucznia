<?php
/* @var $this UczenController */
/* @var $data Uczen */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imie')); ?>:</b>
	<?php echo CHtml::encode($data->imie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nazwisko')); ?>:</b>
	<?php echo CHtml::encode($data->nazwisko); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pesel')); ?>:</b>
	<?php echo CHtml::encode($data->pesel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('miejscowosc')); ?>:</b>
	<?php echo CHtml::encode($data->miejscowosc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ulica')); ?>:</b>
	<?php echo CHtml::encode($data->ulica); ?>
	<br />


</div>