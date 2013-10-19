<?php
/* @var $this SpaceOrdersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Space Orders',
);

$this->menu=array(
	array('label'=>'Create SpaceOrders', 'url'=>array('create')),
	array('label'=>'Manage SpaceOrders', 'url'=>array('admin')),
);
?>

<h1>Space Orders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
