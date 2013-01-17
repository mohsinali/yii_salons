<?php
/* @var $this ProfileSalonController */
/* @var $model ProfileSalon */

$this->breadcrumbs=array(
	'Profile Salons'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ProfileSalon', 'url'=>array('index')),
	array('label'=>'Create ProfileSalon', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('profile-salon-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Profile Salons</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'profile-salon-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'salon_name',
		'phone',
		'address1',
		'address2',
		'contact_person',
		/*
		'contact_email',
		'salon_type',
		'salon_picture',
		'business_description',
		'services_offered',
		'lattitude',
		'longitude',
		'user_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
