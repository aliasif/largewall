<?php
/* @var $this CustomerReferalAccountsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Customer Referal Accounts',
);

$this->menu=array(
	array('label'=>'Create CustomerReferalAccounts', 'url'=>array('create')),
	array('label'=>'Manage CustomerReferalAccounts', 'url'=>array('admin')),
);
?>

<h1>Customer Referal Accounts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
