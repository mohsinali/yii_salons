<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b>Name:</b>
	<?php echo CHtml::link(CHtml::encode($data->first_name)." ".CHtml::encode($data->last_name), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('city_id')); ?>:</b>
	<?php echo CHtml::encode($data->city->name); ?>
	<br />
        
        <b>Country:</b>
	<?php echo CHtml::encode($data->city->country->name); ?>
	<br />
        
        <b>Role:</b>
	<?php //echo CHtml::encode($data->role->name); ?>
	<br />

</div>