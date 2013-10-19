<?php
/* @var $this SpaceOrderHistoryController */
/* @var $model SpaceOrderHistory */

$this->breadcrumbs=array(
	'Space Order Histories'=>array('index'),
	$model->id_order_history=>array('view','id'=>$model->id_order_history),
	'Update',
);

$this->menu=array(
	array('label'=>'List SpaceOrderHistory', 'url'=>array('index')),
	array('label'=>'Create SpaceOrderHistory', 'url'=>array('create')),
	array('label'=>'View SpaceOrderHistory', 'url'=>array('view', 'id'=>$model->id_order_history)),
	array('label'=>'Manage SpaceOrderHistory', 'url'=>array('admin')),
);
?>

<h1>Update SpaceOrderHistory <?php echo $model->id_order_history; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>