<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('state_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->state)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('city_name')); ?>:
	<?php echo GxHtml::encode($data->city_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('status')); ?>:
	<?php echo GxHtml::encode($data->status); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('update_time')); ?>:
	<?php echo GxHtml::encode($data->update_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('create_time')); ?>:
	<?php echo GxHtml::encode($data->create_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('created_by')); ?>:
	<?php echo GxHtml::encode($data->created_by); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('updated_by')); ?>:
	<?php echo GxHtml::encode($data->updated_by); ?>
	<br />
	*/ ?>

</div>