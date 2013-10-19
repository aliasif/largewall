<?php
/* @var $this CmsBlockController */
/* @var $model CmsBlock */

$this->breadcrumbs=array(
	'Cms Blocks'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List CmsBlock', 'url'=>array('index')),
	array('label'=>'Create CmsBlock', 'url'=>array('create')),
	array('label'=>'Update CmsBlock', 'url'=>array('update', 'id'=>$model->block_id)),
	array('label'=>'Delete CmsBlock', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->block_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CmsBlock', 'url'=>array('admin')),
);
?>

<h1>View CmsBlock #<?php echo $model->block_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'block_id',
		'title',
		'identifier',
		'content',
		'creation_time',
		'update_time',
		'is_active',
	),
)); ?>
