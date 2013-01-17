<?php
/* @var $this ProfileSalonController */
/* @var $data ProfileSalon */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salon_name')); ?>:</b>
	<?php echo CHtml::encode($data->salon_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address1')); ?>:</b>
	<?php echo CHtml::encode($data->address1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address2')); ?>:</b>
	<?php echo CHtml::encode($data->address2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_person')); ?>:</b>
	<?php echo CHtml::encode($data->contact_person); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_email')); ?>:</b>
	<?php echo CHtml::encode($data->contact_email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('salon_type')); ?>:</b>
	<?php echo CHtml::encode($data->salon_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salon_picture')); ?>:</b>
	<?php echo CHtml::encode($data->salon_picture); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('business_description')); ?>:</b>
	<?php echo CHtml::encode($data->business_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('services_offered')); ?>:</b>
	<?php echo CHtml::encode($data->services_offered); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lattitude')); ?>:</b>
	<?php echo CHtml::encode($data->lattitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('longitude')); ?>:</b>
	<?php echo CHtml::encode($data->longitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	*/ ?>

</div>