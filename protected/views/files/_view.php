<?php
/* @var $this FilesController */
/* @var $data Files */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('fid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->fid), array('view', 'id'=>$data->fid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_space_order')); ?>:</b>
	<?php echo CHtml::encode($data->fk_space_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_path')); ?>:</b>
	<?php echo CHtml::encode($data->file_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filemime')); ?>:</b>
	<?php echo CHtml::encode($data->filemime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filename')); ?>:</b>
	<?php echo CHtml::encode($data->filename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thumbnail')); ?>:</b>
	<?php echo CHtml::encode($data->thumbnail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->timestamp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primary')); ?>:</b>
	<?php echo CHtml::encode($data->primary); ?>
	<br />

	*/ ?>

</div>