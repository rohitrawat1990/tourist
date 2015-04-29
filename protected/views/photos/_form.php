<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'photos-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<div class="rowLabel"><?php echo $form->labelEx($model,'status'); ?>
</div>
		<div class="rowControl"><?php echo $form->textField($model, 'status'); ?>
		<?php echo $form->error($model,'status'); ?>
		</div><!-- row -->
                </div>
        
		<div class="row">
		<div class="rowLabel"><?php echo $form->labelEx($model,'create_time'); ?>
</div>
		<div class="rowControl"><?php echo $form->textField($model, 'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
		</div><!-- row -->
                </div>
        
		<div class="row">
		<div class="rowLabel"><?php echo $form->labelEx($model,'photo_name'); ?>
</div>
		<div class="rowControl"><?php echo $form->textField($model, 'photo_name', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'photo_name'); ?>
		</div><!-- row -->
                </div>
        

        
             
		 <div class="row"><div class="rowLabel"><label><?php echo GxHtml::encode($model->getRelationLabel('guides:')); ?>
                    </label></div>
             <div class="rowControl">	<?php echo $form->checkBoxList($model, 'guides', GxHtml::encodeEx(GxHtml::listDataEx(Guides::model()->findAllAttributes(null, true)), false, true)); ?>
                 </div>
              </div>
        
<div class="row">
<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div>
</div>
<!-- form -->
