<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />
  
  <b>Roles:</b>	
  <?php 
    $roles = Rights::getAssignedRoles($data->id);
    foreach($roles as $role)
       echo $role->name."<br />";
  ?>
	<br />

</div>