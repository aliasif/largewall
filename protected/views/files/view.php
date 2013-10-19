<?php
/* @var $this FilesController */
/* @var $model Files */

$this->breadcrumbs=array(
	'Files'=>array('index'),
	$model->fid,
);

$this->menu=array(
	array('label'=>'List Files', 'url'=>array('index')),
	array('label'=>'Create Files', 'url'=>array('create')),
	array('label'=>'Update Files', 'url'=>array('update', 'id'=>$model->fid)),
	array('label'=>'Delete Files', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->fid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Files', 'url'=>array('admin')),
);
?>

<h1>View Files #<?php echo $model->fid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fid',
		'fk_space_order',
		'file_path',
		'filemime',
		'filename',
		'thumbnail',
		'status',
		'timestamp',
		'type',
		'primary',
	),
)); ?>
