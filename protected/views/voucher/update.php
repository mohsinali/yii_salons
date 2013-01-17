<?php
/* @var $this VoucherController */
/* @var $model Voucher */

$this->breadcrumbs=array(
	'Vouchers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Voucher', 'url'=>array('index')),
	array('label'=>'Create Voucher', 'url'=>array('create')),
	array('label'=>'View Voucher', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Voucher', 'url'=>array('admin')),
);
?>

<h1>Update Voucher <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>