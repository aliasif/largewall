<?php
/* @var $this SpaceOrdersController */
/* @var $model SpaceOrders */

$this->breadcrumbs=array(
	'Space Orders'=>array('index'),
	$model->id_space_order=>array('view','id'=>$model->id_space_order),
	'Update',
);

$this->menu=array(
	array('label'=>'List SpaceOrders', 'url'=>array('index')),
	array('label'=>'Create SpaceOrders', 'url'=>array('create')),
	array('label'=>'View SpaceOrders', 'url'=>array('view', 'id'=>$model->id_space_order)),
	array('label'=>'Manage SpaceOrders', 'url'=>array('admin')),
);
?>

<h1>Update SpaceOrders <?php echo $model->id_space_order; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>