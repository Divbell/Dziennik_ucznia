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
	'htmlOptions'=>array(
		'class'=>'form-horizontal',
		'role'=>'form',
	)
)); ?>

	<p class="note">Pola z <span class="required">*</span> są wymagane.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'imie', array('class'=>'col-lg-3 col-md-3 col-xs-3 control-label')); ?>
		<div class="col-lg-9 col-md-9 col-xs-9">
			<?php echo $form->textField($model,'imie',array('size'=>60,'maxlength'=>128, 'class'=>'form-control my_input-size')); ?>
			<?php echo $form->error($model,'imie'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nazwisko', array('class'=>'col-lg-3 col-md-3 col-xs-3 control-label')); ?>
		<div class="col-lg-9 col-md-9 col-xs-9">
			<?php echo $form->textField($model,'nazwisko',array('size'=>60,'maxlength'=>128, 'class'=>'form-control my_input-size')); ?>
			<?php echo $form->error($model,'nazwisko'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'pesel', array('class'=>'col-lg-3 col-md-3 col-xs-3 control-label')); ?>
		<div class="col-lg-9 col-md-9 col-xs-9">
			<?php echo $form->textField($model,'pesel',array('size'=>11,'maxlength'=>11, 'class'=>'form-control my_input-size')); ?>
			<?php echo $form->error($model,'pesel'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'miejscowosc', array('class'=>'col-lg-3 col-md-3 col-xs-3 control-label')); ?>
		<div class="col-lg-9 col-md-9 col-xs-9">
			<?php echo $form->textField($model,'miejscowosc',array('size'=>60,'maxlength'=>128, 'class'=>'form-control my_input-size')); ?>
			<?php echo $form->error($model,'miejscowosc'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ulica', array('class'=>'col-lg-3 col-md-3 col-xs-3 control-label')); ?>
		<div class="col-lg-9 col-md-9 col-xs-9">
			<?php echo $form->textField($model,'ulica',array('size'=>60,'maxlength'=>128, 'class'=>'form-control my_input-size')); ?>
			<?php echo $form->error($model,'ulica'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-offset-3 col-md-offset32 col-xs-offset-3 col-lg-9 col-md-9 col-xs-9">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Dodaj' : 'Zapisz', array('class'=>'btn btn-primary btn-lg')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->