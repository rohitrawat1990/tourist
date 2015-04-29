<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('user_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->user)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('location_id')); ?>:
	<?php echo GxHtml::encode($data->location_id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('photo_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->photo)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('guide_name')); ?>:
	<?php echo GxHtml::encode($data->guide_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('about_yourself')); ?>:
	<?php echo GxHtml::encode($data->about_yourself); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('gender')); ?>:
	<?php echo GxHtml::encode($data->gender); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('mobile_number')); ?>:
	<?php echo GxHtml::encode($data->mobile_number); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('experience_detail')); ?>:
	<?php echo GxHtml::encode($data->experience_detail); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('status')); ?>:
	<?php echo GxHtml::encode($data->status); ?>
	<br />
	*/ ?>

</div>