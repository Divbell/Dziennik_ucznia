<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Logowanie</h1>

<p>Wpisz swój login oraz hasło: </p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions'=>array(
		'class'=>'form-horizontal',
		'role'=>'form',
	),
)); ?>

	<p class="note">Pola z <span class="required">*</span> są wymagane.</p>

	<div class="form-group">
		<?php echo $form->labelEx($model,'username', array('class'=>'col-lg-2 col-md-2 col-xs-2 control-label')); ?>
		<div class="col-lg-10 col-md-10 col-xs-10">
			<?php echo $form->textField($model,'username', array('class'=>'form-control my_input-size')); ?>
			<?php echo $form->error($model,'username'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'password', array('class'=>'col-lg-2 col-md-2 col-xs-2 control-label')); ?>
		<div class="col-lg-10 col-md-10 col-xs-10">
			<?php echo $form->passwordField($model,'password', array('class'=>'form-control my_input-size')); ?>
			<?php echo $form->error($model,'password'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-offset-2 col-md-offset-2 col-xs-offset-0 col-lg-10 col-md-10 col-xs-12 my_offset">
			<div class="checkbox">
				<?php echo $form->checkBox($model,'rememberMe'); ?>
				<?php echo $form->label($model,'rememberMe'); ?>
				<?php echo $form->error($model,'rememberMe'); ?>
			</div>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-offset-2 col-md-offset-2 col-xs-offset-2 col-lg-10 col-md-10 col-xs-10">
			<?php echo CHtml::submitButton('Login', array('class'=>'btn btn-primary btn-lg')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
