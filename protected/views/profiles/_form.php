<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'profiles-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary(array($model,$userModel)); ?>

		<div class="row">
		<div class="rowLabel"><?php echo $form->labelEx($model,'first_name'); ?>
</div>
		<div class="rowControl"><?php echo $form->textField($model, 'first_name', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'first_name'); ?>
		</div><!-- row -->
                </div>
        
		<div class="row">
		<div class="rowLabel"><?php echo $form->labelEx($model,'last_name'); ?>
</div>
		<div class="rowControl"><?php echo $form->textField($model, 'last_name', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'last_name'); ?>
		</div><!-- row -->
                </div>

	<?php $this->renderPartial('/users/_form', array('model'=>$userModel,'form'=>$form));?>
	

	
<div class="row">
<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div>
</div>
<!-- form -->
