<?php /* @var $this Controller */ ?>
<!DOCTYPE
<html lang="pl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="pl" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap3/css/bootstrap.min.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/my_styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
			</div><!-- header -->
		</div>
		<div class="row">
			<div id="mainmenu" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'Strona główna', 'url'=>array('/site/index')),
						array('label'=>'Uczniowie', 'url'=>array('/uczen/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Logowanie', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Wyloguj ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
					'linkLabelWrapper'=>'button',
					'linkLabelWrapperHtmlOptions'=>array(
						'class'=>'btn btn-default'
					),
					'htmlOptions'=>array(
						'class'=>'btn-group',
					)
				)); ?>
			</div><!-- mainmenu -->
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 my_content">
				<?php if(isset($this->breadcrumbs)):?>
					<?php $this->widget('zii.widgets.CBreadcrumbs', array(
						'links'=>$this->breadcrumbs,
					)); ?><!-- breadcrumbs -->
				<?php endif?>

				<?php echo $content; ?>
			</div>
		</div>
	<div class="clear col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
		<div class="row">
			<div id="footer"  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				&copy; <?php echo date('Y'); ?> by Michał Huras.<br/>
				<span class="copyright">Musiałem... ; P</span><br/>
				<?php echo Yii::powered(); ?>
			</div><!-- footer -->
		</div>
</div><!-- page -->

</body>
</html>
