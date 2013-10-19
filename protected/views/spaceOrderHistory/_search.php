<?php
/* @var $this SpaceOrderHistoryController */
/* @var $model SpaceOrderHistory */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_order_history'); ?>
		<?php echo $form->textField($model,'id_order_history'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_space_order'); ?>
		<?php echo $form->textField($model,'fk_space_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_user'); ?>
		<?php echo $form->textField($model,'fk_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_updated'); ?>
		<?php echo $form->textField($model,'last_updated'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->