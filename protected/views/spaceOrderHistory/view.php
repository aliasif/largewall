<?php
/* @var $this SpaceOrderHistoryController */
/* @var $model SpaceOrderHistory */

$this->breadcrumbs=array(
	'Space Order Histories'=>array('index'),
	$model->id_order_history,
);

$this->menu=array(
	array('label'=>'List SpaceOrderHistory', 'url'=>array('index')),
	array('label'=>'Create SpaceOrderHistory', 'url'=>array('create')),
	array('label'=>'Update SpaceOrderHistory', 'url'=>array('update', 'id'=>$model->id_order_history)),
	array('label'=>'Delete SpaceOrderHistory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_order_history),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SpaceOrderHistory', 'url'=>array('admin')),
);
?>

<h1>View SpaceOrderHistory #<?php echo $model->id_order_history; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_order_history',
		'fk_space_order',
		'status',
		'fk_user',
		'last_updated',
	),
)); ?>
