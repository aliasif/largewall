<?php
/* @var $this SpaceOrdersController */
/* @var $model SpaceOrders */

$this->breadcrumbs=array(
	'Space Orders'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SpaceOrders', 'url'=>array('index')),
	array('label'=>'Manage SpaceOrders', 'url'=>array('admin')),
);
?>

<h1>Create SpaceOrders</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>