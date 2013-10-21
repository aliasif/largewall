<?php
/* @var $this SpaceOrdersController */
/* @var $model SpaceOrders */

$this->breadcrumbs=array(
	'Space Orders'=>array('index'),
	'Create',
);

?>
<div class="home-page-wrapper">
	<div class="promotional-space-wrapper">
	<?php foreach($reserved_spaces as $space):?>
	
	
	
	
	<?php endforeach;?>
	</div><!-- promotional space wrapper -->

	<div class="shout-box">
		<div class="shout-text">
			<h1>FREE AREA</h1>
		</div>
	</div>
	<div class="free-space-wrapper">
	</div>

</div>
<!-- Home Page Wrapper -->



<?php 
$script = <<< EOD
// Boxer plugin
$('.space-availaible-promotional').boxer({
	stop: function(event, ui) {
		var offset = ui.box.offset();
        var X1 = offset.left;
        var Y1 = offset.top;
        var X2 = event.originalEvent.clientX;
        var Y2 = event.originalEvent.clientY;
        console.log('X1 :'+X1+'Y1 :'+Y1+'X2 :'+X2+'Y2 :'+Y2);
		ui.box.css({ border: '1px solid white', background: 'orange', padding: '0.5em' })
			.append('Dimension:' + ui.box.width() + 'X' + ui.box.height())
			.append('<br/>')
			.append('total pixels:' + (ui.box.width() * ui.box.height()));
	},
	drag: function(event, ui) {
	    // stop dragging if space is already reserved
	}
	// open a pop up , ask for image and text
	
});
$('.space-availaible-free').boxer({
	stop: function(event, ui) {
		var offset = ui.box.offset();
        var X1 = offset.left;
        var Y1 = offset.top;
        var X2 = event.originalEvent.clientX;
        var Y2 = event.originalEvent.clientY;
        console.log('X1 :'+X1+'Y1 :'+Y1+'X2 :'+X2+'Y2 :'+Y2);
		ui.box.css({ border: '1px solid white', background: 'orange', padding: '0.5em' })
			.append('Dimension:' + ui.box.width() + 'X' + ui.box.height())
			.append('<br/>')
			.append('total pixels:' + (ui.box.width() * ui.box.height()));
	},
	drag: function(event, ui) {
	    // stop dragging if space is already reserved
	}
	// open a pop up , ask for image and text
	
});

EOD;

Yii::app()->clientScript->registerScript('boxer', $script);

//$this->renderPartial('_form', array('model'=>$model)); ?>