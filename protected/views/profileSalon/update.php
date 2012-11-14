<?php
/* @var $this ProfileSalonController */
/* @var $model ProfileSalon */

$this->breadcrumbs=array(
	'Profile Salons'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProfileSalon', 'url'=>array('index')),
	array('label'=>'Create ProfileSalon', 'url'=>array('create')),
	array('label'=>'View ProfileSalon', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProfileSalon', 'url'=>array('admin')),
);
?>

<h1>Update ProfileSalon <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>