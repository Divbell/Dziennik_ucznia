<?php
/* @var $this UczenController */
/* @var $model Uczen */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'uczen-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'imie'); ?>
		<?php echo $form->textField($model,'imie',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'imie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nazwisko'); ?>
		<?php echo $form->textField($model,'nazwisko',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nazwisko'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pesel'); ?>
		<?php echo $form->textField($model,'pesel',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'pesel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'miejscowosc'); ?>
		<?php echo $form->textField($model,'miejscowosc',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'miejscowosc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ulica'); ?>
		<?php echo $form->textField($model,'ulica',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'ulica'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->