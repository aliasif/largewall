<?php
/* @var $this CmsBlockController */
/* @var $model CmsBlock */

$this->breadcrumbs=array(
	'Cms Blocks'=>array('index'),
	$model->title=>array('view','id'=>$model->block_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CmsBlock', 'url'=>array('index')),
	array('label'=>'Create CmsBlock', 'url'=>array('create')),
	array('label'=>'View CmsBlock', 'url'=>array('view', 'id'=>$model->block_id)),
	array('label'=>'Manage CmsBlock', 'url'=>array('admin')),
);
?>

<h1>Update CmsBlock <?php echo $model->block_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>