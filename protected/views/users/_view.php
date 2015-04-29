<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('user_name')); ?>:
	<?php echo GxHtml::encode($data->user_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('password')); ?>:
	<?php echo GxHtml::encode($data->password); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('activation_key')); ?>:
	<?php echo GxHtml::encode($data->activation_key); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('last_visit_time')); ?>:
	<?php echo GxHtml::encode($data->last_visit_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ip_address')); ?>:
	<?php echo GxHtml::encode($data->ip_address); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('create_time')); ?>:
	<?php echo GxHtml::encode($data->create_time); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('update_time')); ?>:
	<?php echo GxHtml::encode($data->update_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('status')); ?>:
	<?php echo GxHtml::encode($data->status); ?>
	<br />
	*/ ?>

</div>