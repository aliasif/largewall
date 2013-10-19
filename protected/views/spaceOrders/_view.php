<?php
/* @var $this SpaceOrdersController */
/* @var $data SpaceOrders */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_space_order')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_space_order), array('view', 'id'=>$data->id_space_order)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_nr')); ?>:</b>
	<?php echo CHtml::encode($data->order_nr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_customer')); ?>:</b>
	<?php echo CHtml::encode($data->fk_customer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pixel_X1_location')); ?>:</b>
	<?php echo CHtml::encode($data->pixel_X1_location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pixel_X2_location')); ?>:</b>
	<?php echo CHtml::encode($data->pixel_X2_location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pixel_Y1_location')); ?>:</b>
	<?php echo CHtml::encode($data->pixel_Y1_location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pixel_Y2_location')); ?>:</b>
	<?php echo CHtml::encode($data->pixel_Y2_location); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('total_pixels')); ?>:</b>
	<?php echo CHtml::encode($data->total_pixels); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_amount')); ?>:</b>
	<?php echo CHtml::encode($data->total_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_method')); ?>:</b>
	<?php echo CHtml::encode($data->payment_method); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_status')); ?>:</b>
	<?php echo CHtml::encode($data->payment_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_updated')); ?>:</b>
	<?php echo CHtml::encode($data->last_updated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_date')); ?>:</b>
	<?php echo CHtml::encode($data->order_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expiry_date')); ?>:</b>
	<?php echo CHtml::encode($data->expiry_date); ?>
	<br />

	*/ ?>

</div>