<?php
/* @var $this CustomerReferalAccountsController */
/* @var $model CustomerReferalAccounts */

$this->breadcrumbs=array(
	'Customer Referal Accounts'=>array('index'),
	$model->id_accounts=>array('view','id'=>$model->id_accounts),
	'Update',
);

$this->menu=array(
	array('label'=>'List CustomerReferalAccounts', 'url'=>array('index')),
	array('label'=>'Create CustomerReferalAccounts', 'url'=>array('create')),
	array('label'=>'View CustomerReferalAccounts', 'url'=>array('view', 'id'=>$model->id_accounts)),
	array('label'=>'Manage CustomerReferalAccounts', 'url'=>array('admin')),
);
?>

<h1>Update CustomerReferalAccounts <?php echo $model->id_accounts; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>