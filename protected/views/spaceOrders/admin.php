<?php
/* @var $this SpaceOrdersController */
/* @var $model SpaceOrders */

$this->breadcrumbs=array(
	'Space Orders'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SpaceOrders', 'url'=>array('index')),
	array('label'=>'Create SpaceOrders', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#space-orders-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Space Orders</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'space-orders-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_space_order',
		'order_nr',
		'fk_customer',
		'pixel_X1_location',
		'pixel_X2_location',
		'pixel_Y1_location',
		/*
		'pixel_Y2_location',
		'total_pixels',
		'total_amount',
		'payment_method',
		'payment_status',
		'status',
		'created_by',
		'last_updated',
		'order_date',
		'expiry_date',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
