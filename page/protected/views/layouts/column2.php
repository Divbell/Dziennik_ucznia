<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
			<div id="content">
				<?php echo $content; ?>
			</div><!-- content -->
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<div id="sidebar">
			<?php
				$this->beginWidget('zii.widgets.CPortlet', array(
					'title'=>'Operacje',
					'htmlOptions' => array(
						'class' => 'my_portlet'
					)
				));
				$this->widget('zii.widgets.CMenu', array(
					'items'=>$this->menu,
					'linkLabelWrapper' => 'button',
					'linkLabelWrapperHtmlOptions' => array(
							'class' => 'btn btn-primary'
					),
					'htmlOptions'=>array('class'=>'btn-group'),
				));
				$this->endWidget();
			?>
			</div>
		</div>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>