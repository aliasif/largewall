<?php
/* @var $this SpaceOrderHistoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Space Order Histories',
);

$this->menu=array(
	array('label'=>'Create SpaceOrderHistory', 'url'=>array('create')),
	array('label'=>'Manage SpaceOrderHistory', 'url'=>array('admin')),
);
?>

<h1>Space Order Histories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
