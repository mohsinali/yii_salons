<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>array('id'=>$model->id, 'first_name'=>$model->first_name, 'last_name'=>$model->last_name),
    'attributes'=>array(
        array('name'=>'first_name', 'label'=>'First name'),
        array('name'=>'last_name', 'label'=>'Last name'),
    ),
)); ?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Back',
    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'normal', // null, 'large', 'small' or 'mini'
    'htmlOptions' => array('class' => 'cancel'),
)); ?>

