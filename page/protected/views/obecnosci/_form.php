<?php
/* @var $this ObecnosciController */
/* @var $model Obecnosci */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'dni-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array(
        'class'=>'form-inline my_days_form',
        'role'=>'form',
    )
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="form-group col-lg-12 col-md-12 col-xs-12">
    <?php echo $form->labelEx($model,'dzien', array('class'=>'col-lg-3 col-md-3 col-xs-3 sr-only')); ?>
        <?php echo $form->textField($model,'dzien', array('class'=>'form-control my_input-size', 'placeholder'=>'YYYY-MM-DD')); ?>
        <?php echo $form->error($model,'dzien'); ?>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Dodaj' : 'Zapisz', array('class'=>'btn btn-primary btn-md')); ?>
</div>

<?php $this->endWidget(); ?>

