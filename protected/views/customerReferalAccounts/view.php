<?php
/* @var $this CustomerReferalAccountsController */
/* @var $model CustomerReferalAccounts */

$this->breadcrumbs=array(
	'Customer Referal Accounts'=>array('index'),
	$model->id_accounts,
);

$this->menu=array(
	array('label'=>'List CustomerReferalAccounts', 'url'=>array('index')),
	array('label'=>'Create CustomerReferalAccounts', 'url'=>array('create')),
	array('label'=>'Update CustomerReferalAccounts', 'url'=>array('update', 'id'=>$model->id_accounts)),
	array('label'=>'Delete CustomerReferalAccounts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_accounts),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CustomerReferalAccounts', 'url'=>array('admin')),
);
?>

<h1>View CustomerReferalAccounts #<?php echo $model->id_accounts; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_accounts',
		'fk_customer',
		'transaction_details',
		'amount',
		'type',
		'last_updated',
	),
)); ?>
