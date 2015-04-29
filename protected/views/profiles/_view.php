<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('user_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->user)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('location_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->location)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('first_name')); ?>:
	<?php echo GxHtml::encode($data->first_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_name')); ?>:
	<?php echo GxHtml::encode($data->last_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('about_yourself')); ?>:
	<?php echo GxHtml::encode($data->about_yourself); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('photo')); ?>:
	<?php echo GxHtml::encode($data->photo); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('mobile_number')); ?>:
	<?php echo GxHtml::encode($data->mobile_number); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('gender')); ?>:
	<?php echo GxHtml::encode($data->gender); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('date_of_birth')); ?>:
	<?php echo GxHtml::encode($data->date_of_birth); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('public_url')); ?>:
	<?php echo GxHtml::encode($data->public_url); ?>
	<br />
	*/ ?>

</div>