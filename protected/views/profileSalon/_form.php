<?php
/* @var $this ProfileSalonController */
/* @var $model ProfileSalon */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profile-salon-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'salon_name'); ?>
		<?php echo $form->textField($model,'salon_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'salon_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address1'); ?>
		<?php echo $form->textField($model,'address1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address2'); ?>
		<?php echo $form->textField($model,'address2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_person'); ?>
		<?php echo $form->textField($model,'contact_person',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'contact_person'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_email'); ?>
		<?php echo $form->textField($model,'contact_email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'contact_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salon_type'); ?>
		<?php echo $form->textField($model,'salon_type'); ?>
		<?php echo $form->error($model,'salon_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salon_picture'); ?>
		<?php echo $form->textField($model,'salon_picture',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'salon_picture'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'business_description'); ?>
		<?php echo $form->textArea($model,'business_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'business_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'services_offered'); ?>
		<?php echo $form->textArea($model,'services_offered',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'services_offered'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lattitude'); ?>
		<?php echo $form->textField($model,'lattitude',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'lattitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'longitude'); ?>
		<?php echo $form->textField($model,'longitude',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'longitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->