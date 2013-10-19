<?php
/* @var $this SpaceOrderHistoryController */
/* @var $data SpaceOrderHistory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_order_history')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_order_history), array('view', 'id'=>$data->id_order_history)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_space_order')); ?>:</b>
	<?php echo CHtml::encode($data->fk_space_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_user')); ?>:</b>
	<?php echo CHtml::encode($data->fk_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_updated')); ?>:</b>
	<?php echo CHtml::encode($data->last_updated); ?>
	<br />


</div>