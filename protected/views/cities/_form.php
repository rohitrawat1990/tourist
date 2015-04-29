<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'cities-form',
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
		<div class="rowLabel"><?php echo $form->labelEx($model,'city_name'); ?>
</div>
		<div class="rowControl"><?php echo $form->textField($model, 'city_name', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'city_name'); ?>
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
		<div class="rowLabel"><?php echo $form->labelEx($model,'update_time'); ?>
</div>
		<div class="rowControl"><?php echo $form->textField($model, 'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
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
		<div class="rowLabel"><?php echo $form->labelEx($model,'created_by'); ?>
</div>
		<div class="rowControl"><?php echo $form->textField($model, 'created_by', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'created_by'); ?>
		</div><!-- row -->
                </div>
        
		<div class="row">
		<div class="rowLabel"><?php echo $form->labelEx($model,'updated_by'); ?>
</div>
		<div class="rowControl"><?php echo $form->textField($model, 'updated_by', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'updated_by'); ?>
		</div><!-- row -->
                </div>
        

        
             
        
             
		 <div class="row"><div class="rowLabel"><label><?php echo GxHtml::encode($model->getRelationLabel('locations:')); ?>
                    </label></div>
             <div class="rowControl">	<?php echo $form->checkBoxList($model, 'locations', GxHtml::encodeEx(GxHtml::listDataEx(Locations::model()->findAllAttributes(null, true)), false, true)); ?>
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
