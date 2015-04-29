<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'guides-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<div class="rowLabel"><?php echo $form->labelEx($model,'user_id'); ?>
</div>
		<div class="rowControl"><?php echo $form->dropDownList($model, 'user_id', GxHtml::listDataEx(Users::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'user_id'); ?>
		</div><!-- row -->
                </div>
        
		<div class="row">
		<div class="rowLabel"><?php echo $form->labelEx($model,'location_id'); ?>
</div>
		<div class="rowControl"><?php echo $form->textField($model, 'location_id'); ?>
		<?php echo $form->error($model,'location_id'); ?>
		</div><!-- row -->
                </div>
        
		<div class="row">
		<div class="rowLabel"><?php echo $form->labelEx($model,'photo_id'); ?>
</div>
		<div class="rowControl"><?php echo $form->dropDownList($model, 'photo_id', GxHtml::listDataEx(Photos::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'photo_id'); ?>
		</div><!-- row -->
                </div>
        
		<div class="row">
		<div class="rowLabel"><?php echo $form->labelEx($model,'guide_name'); ?>
</div>
		<div class="rowControl"><?php echo $form->textField($model, 'guide_name', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'guide_name'); ?>
		</div><!-- row -->
                </div>
        
		<div class="row">
		<div class="rowLabel"><?php echo $form->labelEx($model,'about_yourself'); ?>
</div>
		<div class="rowControl"><?php echo $form->textField($model, 'about_yourself', array('maxlength' => 150)); ?>
		<?php echo $form->error($model,'about_yourself'); ?>
		</div><!-- row -->
                </div>
        
		<div class="row">
		<div class="rowLabel"><?php echo $form->labelEx($model,'gender'); ?>
</div>
		<div class="rowControl"><?php echo $form->textField($model, 'gender'); ?>
		<?php echo $form->error($model,'gender'); ?>
		</div><!-- row -->
                </div>
        
		<div class="row">
		<div class="rowLabel"><?php echo $form->labelEx($model,'mobile_number'); ?>
</div>
		<div class="rowControl"><?php echo $form->textField($model, 'mobile_number', array('maxlength' => 13)); ?>
		<?php echo $form->error($model,'mobile_number'); ?>
		</div><!-- row -->
                </div>
        
		<div class="row">
		<div class="rowLabel"><?php echo $form->labelEx($model,'experience_detail'); ?>
</div>
		<div class="rowControl"><?php echo $form->textField($model, 'experience_detail', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'experience_detail'); ?>
		</div><!-- row -->
                </div>
        
		<div class="row">
		<div class="rowLabel"><?php echo $form->labelEx($model,'status'); ?>
</div>
		<div class="rowControl"><?php echo $form->textField($model, 'status'); ?>
		<?php echo $form->error($model,'status'); ?>
		</div><!-- row -->
                </div>
        

        
             
        
             
<div class="row">
<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div>
</div>
<!-- form -->
