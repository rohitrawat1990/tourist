<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'locations-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<div class="rowLabel"><?php echo $form->labelEx($model,'state_id'); ?>
</div>
		<div class="rowControl"><?php echo $form->dropDownList($model, 'state_id', GxHtml::listDataEx(States::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'state_id'); ?>
		</div><!-- row -->
                </div>
        
		<div class="row">
		<div class="rowLabel"><?php echo $form->labelEx($model,'city_id'); ?>
</div>
		<div class="rowControl"><?php echo $form->dropDownList($model, 'city_id', GxHtml::listDataEx(Cities::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'city_id'); ?>
		</div><!-- row -->
                </div>
        
		<div class="row">
		<div class="rowLabel"><?php echo $form->labelEx($model,'locality_name'); ?>
</div>
		<div class="rowControl"><?php echo $form->textField($model, 'locality_name', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'locality_name'); ?>
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
		<div class="rowLabel"><?php echo $form->labelEx($model,'update_time'); ?>
</div>
		<div class="rowControl"><?php echo $form->textField($model, 'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
		</div><!-- row -->
                </div>
        
		<div class="row">
		<div class="rowLabel"><?php echo $form->labelEx($model,'status'); ?>
</div>
		<div class="rowControl"><?php echo $form->textField($model, 'status'); ?>
		<?php echo $form->error($model,'status'); ?>
		</div><!-- row -->
                </div>
        

        
             
        
             
        
             
		 <div class="row"><div class="rowLabel"><label><?php echo GxHtml::encode($model->getRelationLabel('profiles:')); ?>
                    </label></div>
             <div class="rowControl">	<?php echo $form->checkBoxList($model, 'profiles', GxHtml::encodeEx(GxHtml::listDataEx(Profiles::model()->findAllAttributes(null, true)), false, true)); ?>
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
