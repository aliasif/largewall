<section id="navigation-main">  
<div class="navbar">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
  
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
                            array('label'=>'Home', 'url'=>array('/site/index'),'linkOptions'=>array("data-description"=>"home page")),
                            array('label'=>'Buy Space', 'url'=>array('/spaceOrders/create'),'linkOptions'=>array("data-description"=>"display your logo")),
                            array('label'=>'Refer Program', 'url'=>array('/site/page', 'view'=>'refer'),'linkOptions'=>array("data-description"=>"earn money"),),
                            array('label'=>'Why us', 'url'=>array('/site/page', 'view'=>'buy-space'),'linkOptions'=>array("data-description"=>"why to buy space"),),
                            array('label'=>'About us', 'url'=>array('/site/page', 'view'=>'about'),'linkOptions'=>array("data-description"=>"what we are about"),),
                            array('label'=>'Terms & Conditions', 'url'=>array('/site/page', 'view'=>'terms-conditions'),'linkOptions'=>array("data-description"=>"terms and conditions"),),
                            array('label'=>'Blog', 'url'=>array('/site/page', 'view'=>'blog'),'linkOptions'=>array("data-description"=>"visit our blog"),),
                            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"member area")),

                            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"member area")),
                    ),
                )); ?>
    	</div>
    </div>
	</div>
</div>
</section><!-- /#navigation-main -->
			
