<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<h1>Witaj <i><strong><?php echo Yii::app()->user->username; ?></strong></i>!</h1>
<h4><i>Zarządzaj obecnościami swoich uczniów w szybki i prosty sposób dzięki aplikacji <strong><?php
    echo Yii::app()->name; ?></strong>! Kliknij "Uczniowie", aby zarządzać uczniami lub
    "Obecnosci", aby zaznaczyć ich obecności w danych dniach.</i></h4>

<h3>Teraz możesz: </h3>
<ul>
	<li><b><?php echo CHtml::link('Zarządzać uczniami', array('uczen/admin')); ?></b></li>
	<li><b><?php echo CHtml::link('Zarządzać obecnościami uczniów', array('obecnosci/index')); ?></b></li>
	<li><b><?php echo CHtml::link('Wylogować się', array('site/logout')); ?></b></li>
</ul>