<?php
/* @var $this VoucherController */
/* @var $model Voucher */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'voucher-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discount'); ?>
		<?php echo $form->textField($model,'discount'); ?>
		<?php echo $form->error($model,'discount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'validity'); ?>
		<?php //echo $form->textField($model,'validity'); ?>
    <?php
    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'name'=>'Voucher[validity]',
        'model' => $model,
        // additional javascript options for the date picker plugin
        'options'=>array(
            'showAnim'=>'fold',
        ),
        'htmlOptions'=>array(
            'style'=>'height:20px;'
        ),
    ));
    ?>
		<?php echo $form->error($model,'validity'); ?>
      

      
      
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'saving'); ?>
		<?php echo $form->textField($model,'saving'); ?>
		<?php echo $form->error($model,'saving'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conditions'); ?>
		<?php echo $form->textArea($model,'conditions',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'conditions'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->