<?php
/* @var $this CustomerReferalAccountsController */
/* @var $model CustomerReferalAccounts */

$this->breadcrumbs=array(
	'Customer Referal Accounts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CustomerReferalAccounts', 'url'=>array('index')),
	array('label'=>'Manage CustomerReferalAccounts', 'url'=>array('admin')),
);
?>

<h1>Create CustomerReferalAccounts</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>