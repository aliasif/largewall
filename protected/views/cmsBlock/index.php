<?php
/* @var $this CmsBlockController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cms Blocks',
);

$this->menu=array(
	array('label'=>'Create CmsBlock', 'url'=>array('create')),
	array('label'=>'Manage CmsBlock', 'url'=>array('admin')),
);
?>

<h1>Cms Blocks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
