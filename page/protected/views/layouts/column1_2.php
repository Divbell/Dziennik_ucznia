<?php /* @var $this Controller */ ?>

<?php $this->beginContent('//layouts/main'); ?>
    <div id="content">
        <div class="my_mainmenu">
            <?php $this->widget('zii.widgets.CMenu',array(
                'items'=>$this->menu,
                'linkLabelWrapper'=>'button',
                'linkLabelWrapperHtmlOptions'=>array(
                    'class'=>'btn btn-primary btn-sm'
                ),
                'htmlOptions'=>array(
                    'class'=>'btn-group',
                ),
            )); ?>
        </div>
    <?php   echo $content; ?>
    </div><!-- content -->
<?php $this->endContent(); ?>