<?php
/* @var $this CustomerReferalAccountsController */
/* @var $model CustomerReferalAccounts */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_accounts'); ?>
		<?php echo $form->textField($model,'id_accounts'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_customer'); ?>
		<?php echo $form->textField($model,'fk_customer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transaction_details'); ?>
		<?php echo $form->textArea($model,'transaction_details',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amount'); ?>
		<?php echo $form->textField($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
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