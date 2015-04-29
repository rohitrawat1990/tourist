<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'user_id'); ?>
		<?php echo $form->dropDownList($model, 'user_id', GxHtml::listDataEx(Users::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'location_id'); ?>
		<?php echo $form->textField($model, 'location_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'photo_id'); ?>
		<?php echo $form->dropDownList($model, 'photo_id', GxHtml::listDataEx(Photos::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'guide_name'); ?>
		<?php echo $form->textField($model, 'guide_name', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'about_yourself'); ?>
		<?php echo $form->textField($model, 'about_yourself', array('maxlength' => 150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'gender'); ?>
		<?php echo $form->textField($model, 'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'mobile_number'); ?>
		<?php echo $form->textField($model, 'mobile_number', array('maxlength' => 13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'experience_detail'); ?>
		<?php echo $form->textField($model, 'experience_detail', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'status'); ?>
		<?php echo $form->textField($model, 'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
