<?php
/* @var $this SpaceOrdersController */
/* @var $model SpaceOrders */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'space-orders-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'order_nr'); ?>
		<?php echo $form->textField($model,'order_nr'); ?>
		<?php echo $form->error($model,'order_nr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_customer'); ?>
		<?php echo $form->textField($model,'fk_customer'); ?>
		<?php echo $form->error($model,'fk_customer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pixel_X1_location'); ?>
		<?php echo $form->textField($model,'pixel_X1_location'); ?>
		<?php echo $form->error($model,'pixel_X1_location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pixel_X2_location'); ?>
		<?php echo $form->textField($model,'pixel_X2_location'); ?>
		<?php echo $form->error($model,'pixel_X2_location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pixel_Y1_location'); ?>
		<?php echo $form->textField($model,'pixel_Y1_location'); ?>
		<?php echo $form->error($model,'pixel_Y1_location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pixel_Y2_location'); ?>
		<?php echo $form->textField($model,'pixel_Y2_location'); ?>
		<?php echo $form->error($model,'pixel_Y2_location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_pixels'); ?>
		<?php echo $form->textField($model,'total_pixels'); ?>
		<?php echo $form->error($model,'total_pixels'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_amount'); ?>
		<?php echo $form->textField($model,'total_amount'); ?>
		<?php echo $form->error($model,'total_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_method'); ?>
		<?php echo $form->textField($model,'payment_method',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'payment_method'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_status'); ?>
		<?php echo $form->textField($model,'payment_status',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'payment_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_updated'); ?>
		<?php echo $form->textField($model,'last_updated'); ?>
		<?php echo $form->error($model,'last_updated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order_date'); ?>
		<?php echo $form->textField($model,'order_date'); ?>
		<?php echo $form->error($model,'order_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expiry_date'); ?>
		<?php echo $form->textField($model,'expiry_date'); ?>
		<?php echo $form->error($model,'expiry_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->