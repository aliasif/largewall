<?php
/* @var $this CmsBlockController */
/* @var $model CmsBlock */

$this->breadcrumbs=array(
	'Cms Blocks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CmsBlock', 'url'=>array('index')),
	array('label'=>'Manage CmsBlock', 'url'=>array('admin')),
);
?>

<h1>Create CmsBlock</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>