<?php
/* @var $this ProfileSalonController */
/* @var $model ProfileSalon */

$this->breadcrumbs=array(
	'Profile Salons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProfileSalon', 'url'=>array('index')),
	array('label'=>'Manage ProfileSalon', 'url'=>array('admin')),
);
?>

<h1>Create ProfileSalon</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>