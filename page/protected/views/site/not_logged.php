<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1>Jesteś niezalogowany/a!</h1>

			<p>Przejdź do strony logowania i <b><?php echo CHtml::link('Zaloguj się', array('site/login')); ?></b>. </p>
		</div>
	</div>
</div>