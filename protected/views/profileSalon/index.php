<?php
/* @var $this ProfileSalonController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profile Salons',
);

$this->menu=array(
	array('label'=>'Create ProfileSalon', 'url'=>array('create')),
	array('label'=>'Manage ProfileSalon', 'url'=>array('admin')),
);
?>

<h1>Profile Salons</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
