<?php
/* @var $this CustomerReferalAccountsController */
/* @var $data CustomerReferalAccounts */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_accounts')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_accounts), array('view', 'id'=>$data->id_accounts)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_customer')); ?>:</b>
	<?php echo CHtml::encode($data->fk_customer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaction_details')); ?>:</b>
	<?php echo CHtml::encode($data->transaction_details); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_updated')); ?>:</b>
	<?php echo CHtml::encode($data->last_updated); ?>
	<br />


</div>