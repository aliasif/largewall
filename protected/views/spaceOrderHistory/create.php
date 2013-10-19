<?php
/* @var $this SpaceOrderHistoryController */
/* @var $model SpaceOrderHistory */

$this->breadcrumbs=array(
	'Space Order Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SpaceOrderHistory', 'url'=>array('index')),
	array('label'=>'Manage SpaceOrderHistory', 'url'=>array('admin')),
);
?>

<h1>Create SpaceOrderHistory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>