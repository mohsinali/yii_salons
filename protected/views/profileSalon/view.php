<?php
/* @var $this ProfileSalonController */
/* @var $model ProfileSalon */

$this->breadcrumbs=array(
	'Profile Salons'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProfileSalon', 'url'=>array('index')),
	array('label'=>'Create ProfileSalon', 'url'=>array('create')),
	array('label'=>'Update ProfileSalon', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProfileSalon', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProfileSalon', 'url'=>array('admin')),
);
?>

<h1>View ProfileSalon #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'salon_name',
		'phone',
		'address1',
		'address2',
		'contact_person',
		'contact_email',
		'salon_type',
		'salon_picture',
		'business_description',
		'services_offered',
		'lattitude',
		'longitude',
		'user_id',
	),
)); ?>
