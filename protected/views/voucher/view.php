<?php
/* @var $this VoucherController */
/* @var $model Voucher */

$this->breadcrumbs=array(
	'Vouchers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Voucher', 'url'=>array('index')),
	array('label'=>'Create Voucher', 'url'=>array('create')),
	array('label'=>'Update Voucher', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Voucher', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Voucher', 'url'=>array('admin')),
);
?>

<h1>View Voucher #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'discount',
		'quantity',
		'validity',
		'saving',
		'description',
		'conditions',
	),
)); ?>
