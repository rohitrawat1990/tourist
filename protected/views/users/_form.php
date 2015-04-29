		<div class="row">
		<div class="rowLabel"><?php echo $form->labelEx($model,'user_name'); ?>
</div>
		<div class="rowControl"><?php echo $form->textField($model, 'user_name', array('maxlength' => 150)); ?>
		<?php echo $form->error($model,'user_name'); ?>
		</div><!-- row -->
                </div>
        
		<div class="row">
		<div class="rowLabel"><?php echo $form->labelEx($model,'password'); ?>
</div>
		<div class="rowControl"><?php echo $form->passwordField($model, 'password', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'password'); ?>
		</div><!-- row -->
                </div>
       <div class="row">
		<div class="rowLabel"><?php echo $form->labelEx($model,'confirm_password'); ?>
</div>
		<div class="rowControl"><?php echo $form->passwordField($model, 'confirm_password', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'confirm_password'); ?>
		</div><!-- row -->
                </div>
		<div class="row">
		<div class="rowControl"><?php echo $form->hiddenField($model, 'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
		</div><!-- row -->
                </div>
                 <div class="row"><div class="rowLabel"><label><?php echo GxHtml::encode($model->getRelationLabel('roles:')); ?>
                    </label></div>
             <div class="rowControl">	<?php echo $form->checkBoxList($model, 'roles', GxHtml::encodeEx(GxHtml::listDataEx(Roles::model()->findAllAttributes(null, true)), false, true)); ?>
                 </div>
              </div>