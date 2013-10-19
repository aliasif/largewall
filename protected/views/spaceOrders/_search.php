<?php
/* @var $this SpaceOrdersController */
/* @var $model SpaceOrders */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_space_order'); ?>
		<?php echo $form->textField($model,'id_space_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'order_nr'); ?>
		<?php echo $form->textField($model,'order_nr'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_customer'); ?>
		<?php echo $form->textField($model,'fk_customer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pixel_X1_location'); ?>
		<?php echo $form->textField($model,'pixel_X1_location'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pixel_X2_location'); ?>
		<?php echo $form->textField($model,'pixel_X2_location'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pixel_Y1_location'); ?>
		<?php echo $form->textField($model,'pixel_Y1_location'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pixel_Y2_location'); ?>
		<?php echo $form->textField($model,'pixel_Y2_location'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_pixels'); ?>
		<?php echo $form->textField($model,'total_pixels'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_amount'); ?>
		<?php echo $form->textField($model,'total_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_method'); ?>
		<?php echo $form->textField($model,'payment_method',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_status'); ?>
		<?php echo $form->textField($model,'payment_status',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_updated'); ?>
		<?php echo $form->textField($model,'last_updated'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'order_date'); ?>
		<?php echo $form->textField($model,'order_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expiry_date'); ?>
		<?php echo $form->textField($model,'expiry_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->