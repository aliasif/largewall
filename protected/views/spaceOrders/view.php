<?php
/* @var $this SpaceOrdersController */
/* @var $model SpaceOrders */

$this->breadcrumbs=array(
	'Space Orders'=>array('index'),
	$model->id_space_order,
);

$this->menu=array(
	array('label'=>'List SpaceOrders', 'url'=>array('index')),
	array('label'=>'Create SpaceOrders', 'url'=>array('create')),
	array('label'=>'Update SpaceOrders', 'url'=>array('update', 'id'=>$model->id_space_order)),
	array('label'=>'Delete SpaceOrders', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_space_order),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SpaceOrders', 'url'=>array('admin')),
);
?>

<h1>View SpaceOrders #<?php echo $model->id_space_order; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_space_order',
		'order_nr',
		'fk_customer',
		'pixel_X1_location',
		'pixel_X2_location',
		'pixel_Y1_location',
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
	),
)); ?>
